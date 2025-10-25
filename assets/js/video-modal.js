// Video Modal JavaScript
(function() {
    'use strict';

    // Tạo HTML Modal
    function createModal() {
        const modalId = 'videoModal';
        if (document.getElementById(modalId)) return;

        const modalHTML = `
            <div class="modal-video-overlay" id="${modalId}">
                <button class="close-btn" id="closeModal" aria-label="Close video">
                    <i class="fa fa-times"></i>
                </button>
                <div class="modal-video-content">
                    <div class="video-container">
                        <iframe id="videoFrame" src="" allowfullscreen allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        `;

        document.body.insertAdjacentHTML('beforeend', modalHTML);
    }

    // Hàm lấy YouTube video ID từ URL
    function getYouTubeId(url) {
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
        const match = url.match(regExp);
        return (match && match[2].length === 11) ? match[2] : null;
    }

    // Hàm đóng modal
    function closeModal() {
        const modal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');
        
        if (modal) {
            modal.classList.remove('active');
            if (videoFrame) {
                videoFrame.src = '';
            }
            document.body.style.overflow = 'auto';
        }
    }

    // Hàm mở modal
    function openModal(videoUrl) {
        const modal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');
        const videoId = getYouTubeId(videoUrl);
        
        if (videoId && modal && videoFrame) {
            videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    // Khởi tạo
    function init() {
        // Tạo modal
        createModal();

        // Đợi một chút để đảm bảo modal đã được tạo
        setTimeout(() => {
            const modal = document.getElementById('videoModal');
            const closeBtn = document.getElementById('closeModal');
            const videoButtons = document.querySelectorAll('.lightbox-video');

            // Gắn sự kiện cho tất cả button video
            videoButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const videoUrl = this.getAttribute('href');
                    openModal(videoUrl);
                });
            });

            // Đóng modal khi click vào nút close
            if (closeBtn) {
                closeBtn.addEventListener('click', closeModal);
            }

            // Đóng modal khi click vào overlay
            if (modal) {
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        closeModal();
                    }
                });
            }

            // Đóng modal khi nhấn ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal && modal.classList.contains('active')) {
                    closeModal();
                }
            });
        }, 100);
    }

    // Chạy khi DOM đã sẵn sàng
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Export functions nếu cần sử dụng từ bên ngoài
    window.VideoModal = {
        open: openModal,
        close: closeModal
    };

})();