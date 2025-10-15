jQuery(document).ready(function($){
    //jQuery('.tooltips-chat').hide();
        setTimeout(function(){
            jQuery('.tooltips-chat').fadeIn();
        },20000)
        jQuery('.tooltips-chat .close').click(function(){
            jQuery('.tooltips-chat').fadeOut();
        })
    //console.log(countDownDate);
    var offset = 100;
    var speed = 250;
    var duration = 500;
        $(window).scroll(function(){
            if ($(this).scrollTop() < offset) {
              $('.topbutton') .fadeOut(duration);
            } else {
              $('.topbutton') .fadeIn(duration);
              //$('.topbutton').css("opacity", "0.5");
            }
        });
     $('.topbutton').on('click', function(){
        $('html, body').animate({scrollTop:0}, speed);
        return false;
        });
        $('.coblog-trigger-bottom').remove();
    $('body').on('mousewheel DOMMouseScroll', function(e){
      if(typeof e.originalEvent.detail == 'number' && e.originalEvent.detail !== 0) {
        if(e.originalEvent.detail > 0) {
          //console.log('Down');
          $('.topbutton').css("opacity", "0.5");
          $('.mobile-support').fadeOut();
        } else if(e.originalEvent.detail < 0){
            //console.log('Up');
            $('.mobile-support').fadeIn();
            $('.topbutton').css("opacity", "1");
        }
      } else if (typeof e.originalEvent.wheelDelta == 'number') {
        if(e.originalEvent.wheelDelta < 0) {
            //console.log('Down');
            //$('.mobile-support').fadeOut(1000);
            $('.topbutton').css("opacity", "0.5");
        } else if(e.originalEvent.wheelDelta > 0) {
            //console.log('Up');
            $('.topbutton').css("opacity", "1");
            //$('.mobile-support').fadeIn(1000);
        }
      }
    });
    // scroll mobile 
     var lastScrollTop = 100;
    window.addEventListener("scroll", function () {
     var st = window.pageYOffset || document.documentElement.scrollTop;
        if (st > lastScrollTop) {
           // $('.mobile-support').fadeOut();
            $('.topbutton').css("opacity", "0.5");
        } else {
           // $('.mobile-support').fadeIn();
            $('.topbutton').css("opacity", "1");
        }
        lastScrollTop = st <= 100 ? 100 : st;
      });
    $('.btn-header #myBtn').on('click', function(){
        $('.modal').css('display','block');
    });  
    $('.mobile-support .myBtn').on('click', function(){
        $('.modal').css('display','block');
    });
    $('.modal-content .pop-close').on('click', function(){
        $('.modal').css('display','none');
    });
    $('.btn-popup').on('click', function(){
        $('.modal').css('display','block');
    });
});
const links = document.querySelectorAll('.share a');

function onClick(event) {
	event.preventDefault();

	window.open(
		event.currentTarget.href,
		'share',
		'width=600,height=500,location=no,menubar=no,toolbar=no'
	);
}

links.forEach((link) => {
	const url = encodeURIComponent(window.location.origin + window.location.pathname);
	const title = encodeURIComponent(document.title);

	link.href = link.href
		.replace('{url}', url)
		.replace('{title}', title);

	link.addEventListener('click', onClick);
});

function vietnameseSlug(title) {
  var slug = title.toLowerCase();

  // Chuyển đổi các ký tự có dấu sang không dấu
  slug = slug.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
  slug = slug.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
  slug = slug.replace(/ì|í|ị|ỉ|ĩ/g, "i");
  slug = slug.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
  slug = slug.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
  slug = slug.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
  slug = slug.replace(/đ/g, "d");

  // Xóa các ký tự đặc biệt
  slug = slug.replace(/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/g, "");

  // Thay thế khoảng trắng bằng dấu gạch ngang
  slug = slug.replace(/ /g, "-");

  // Loại bỏ các ký tự gạch ngang thừa ở đầu và cuối chuỗi và các dấu gạch ngang liên tiếp
  slug = slug.replace(/^-+|-+$/g, "");
  slug = slug.replace(/-+/g, "-");

  return slug;
}

jQuery(document).ready(function($){
  var methodCount = 1; // Đếm số lượng các mục "methods"
  $('h2').each(function(){
      if ($(this).attr('data-toc') === 'no') {
          return; // Bỏ qua tiêu đề có data-toc="no"
      }

      var id = $(this).attr('id'); // Lấy ID hiện có hoặc tạo mới nếu không tồn tại
      if (!id) {
          id = 'section_' + methodCount;
          $(this).attr('id', id);
      }

      var title = $(this).text();
      var slug = vietnameseSlug(title); // Chuyển tiêu đề có dấu thành không dấu

      var tocItem = '<div class="method_toc_item toc_method" data-section="#'+ slug +'">' +
                     '<a href="#'+ slug +'">' + title + '</a></div>';

      $('#method_toc_list').append(tocItem);
      methodCount++;
  });
});

jQuery(document).ready(function($) {
  if (typeof customViewAjax !== 'undefined') {
      var postID = customViewAjax.post_id;

      $.ajax({
          type: 'POST',
          url: customViewAjax.ajax_url,
          data: {
              action: 'ajax_set_post_views',
              postID: postID,
              security: customViewAjax.security
          },
          success: function(response) {
              if (!response.success) {
                  console.error('Error:', response.data);
              }
          },
          error: function() {
              console.error('AJAX request failed.');
          }
      });
  } else {
      console.error('customViewAjax is not defined.');
  }
});

/**
 * Greenshift Mouse Parallax Effect
 * Phù hợp cho Greenshift iconbox blocks
 */
(function() {
    'use strict';

    class GreenshiftParallax {
        constructor() {
            this.container = document.querySelector('.parallax-scene-3');
            if (!this.container) return;

            // Lấy tất cả icon boxes
            this.icons = {
                one: this.container.querySelector('.icon-one'),
                two: this.container.querySelector('.icon-two'),
                three: this.container.querySelector('.icon-three'),
                four: this.container.querySelector('.icon-four')
            };

            // Kiểm tra xem có đủ icons không
            if (!this.icons.one) return;

            this.width = window.innerWidth;
            this.height = window.innerHeight;
            
            // Độ sâu mặc định cho mỗi icon (có thể tùy chỉnh)
            this.depths = {
                one: 0.20,
                two: 0.30,
                three: 0.25,
                four: 0.15
            };

            this.init();
        }

        init() {
            this.setStyles();
            this.bindEvents();
        }

        setStyles() {
            // Container styles
            this.container.style.position = 'relative';
            this.container.style.transformStyle = 'preserve-3d';
            this.container.style.backfaceVisibility = 'hidden';

            // Icon one - relative position
            if (this.icons.one) {
                this.icons.one.style.position = 'relative';
                this.icons.one.style.zIndex = '1';
                this.icons.one.style.transformStyle = 'preserve-3d';
                this.icons.one.style.backfaceVisibility = 'hidden';
            }

            // Other icons - absolute position
            ['two', 'three', 'four'].forEach((key, index) => {
                if (this.icons[key]) {
                    this.icons[key].style.position = 'absolute';
                    this.icons[key].style.left = '0';
                    this.icons[key].style.top = '0';
                    this.icons[key].style.zIndex = String(index + 2);
                    this.icons[key].style.transformStyle = 'preserve-3d';
                    this.icons[key].style.backfaceVisibility = 'hidden';
                }
            });
        }

        bindEvents() {
            // Mouse move
            document.addEventListener('mousemove', (e) => {
                this.onMouseMove(e);
            });

            // Window resize
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    this.width = window.innerWidth;
                    this.height = window.innerHeight;
                }, 200);
            });
        }

        onMouseMove(event) {
            const mouseX = event.clientX;
            const mouseY = event.clientY;
            
            // Tính toán vị trí chuột từ tâm màn hình
            const centerX = (mouseX - this.width / 2) / (this.width / 2);
            const centerY = (mouseY - this.height / 2) / (this.height / 2);

            // Di chuyển từng icon với depth khác nhau
            Object.keys(this.icons).forEach((key) => {
                const icon = this.icons[key];
                if (!icon) return;

                const depth = this.depths[key];
                const moveX = centerX * depth * 100;
                const moveY = centerY * depth * 100;
                
                icon.style.transform = `translate3d(${moveX}px, ${moveY}px, 0px)`;
            });

            // Update container transform
            this.container.style.transform = 'translate3d(0px, 0px, 0px) rotate(0.0001deg)';
        }
    }

    // Khởi tạo
    function init() {
        new GreenshiftParallax();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Re-init khi cần thiết (cho AJAX load)
    window.initGreenshiftParallax = init;

})();


