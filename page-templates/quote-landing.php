<?php

/**
 * Template Name: Báo Giá In Ấn
 * Description: Landing page báo giá in ấn với calculator tự động
 */

get_header(); ?>

<div id="primary" class="content-area quote-landing-page">
    <main id="main" class="site-main">

        <!-- Hero Section với Particles Background -->
        <section class="hero-section" id="hero">
            <div class="particles-bg" id="particles-js"></div>
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="badge-text">🏆 Đáng tin cậy #1</span>
                    </div>
                    <h1 class="hero-title">
                        <span class="title-main">Báo Giá In Ấn</span>
                        <span class="title-highlight">Tự Động & Chính Xác</span>
                    </h1>
                    <p class="hero-subtitle">
                        Công nghệ <strong>AI tính giá</strong> - Giao hàng <strong>Express 24h</strong> -
                        Cam kết <strong>hoàn tiền 100%</strong> nếu không hài lòng
                    </p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number">15K+</div>
                            <div class="stat-label">Khách hàng tin tưởng</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">99.8%</div>
                            <div class="stat-label">Độ hài lòng</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24h</div>
                            <div class="stat-label">Giao hàng nhanh</div>
                        </div>
                    </div>
                    <div class="hero-actions">
                        <a href="#calculator" class="btn-primary pulse">
                            <span class="btn-icon">⚡</span>
                            Tính Giá Ngay
                        </a>
                        <a href="#portfolio" class="btn-secondary">
                            <span class="btn-icon">🎨</span>
                            Xem Mẫu In
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-stack">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/printing-machine.webp" alt="Máy in UV chuyên nghiệp" class="stack-img-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/quality-sample.webp" alt="Mẫu in chất lượng cao" class="stack-img-2">
                        <div class="quality-badge">
                            <span class="badge-icon">✨</span>
                            <span class="badge-text">Chất lượng<br>Châu Âu</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust Indicators -->
        <section class="trust-section">
            <div class="container">
                <div class="trust-logos">
                    <div class="trust-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cert-iso.png" alt="ISO 9001">
                        <span>ISO 9001:2015</span>
                    </div>
                    <div class="trust-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cert-fsc.png" alt="FSC Certified">
                        <span>FSC Certified</span>
                    </div>
                    <div class="trust-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/award.png" alt="Giải thưởng">
                        <span>Top 10 In Ấn VN</span>
                    </div>
                    <div class="trust-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/guarantee.png" alt="Bảo hành">
                        <span>Bảo hành 2 năm</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Advanced Quote Calculator -->
        <section class="calculator-section" id="calculator">
            <div class="container">
                <div class="section-header">
                    <div class="section-badge">💰 MIỄN PHÍ</div>
                    <h2 class="section-title">
                        Calculator Báo Giá <span class="highlight">Thông Minh</span>
                    </h2>
                    <p class="section-subtitle">
                        INUV247 SOLUTIONS - Tính toán chính xác đến từng đồng dựa trên 10+ yếu tố
                    </p>
                </div>

                <?php echo do_shortcode('[printing_quote_calculator]');
                ?>
            </div>
</div>
</section>

<!-- Portfolio Gallery -->
<section class="portfolio-section" id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">
                Thư Viện <span class="highlight">Mẫu In</span>
            </h2>
            <p class="section-subtitle">
                Hơn 1000+ mẫu thiết kế từ các dự án thực tế
            </p>
        </div>

        <div class="portfolio-filter">
            <button class="filter-btn active" data-filter="all">Tất cả</button>
            <button class="filter-btn" data-filter="uv-bat">UV Bạt</button>
            <button class="filter-btn" data-filter="decal">Decal</button>
            <button class="filter-btn" data-filter="bang-hieu">Bảng hiệu</button>
            <button class="filter-btn" data-filter="backdrop">Backdrop</button>
        </div>

        <div class="portfolio-grid">
            <?php
            $portfolio_items = [
                ['category' => 'uv-bat', 'image' => 'sample-uv-bat-1.jpg', 'title' => 'Bạt quảng cáo siêu thị', 'size' => '3x2m'],
                ['category' => 'decal', 'image' => 'sample-decal-1.jpg', 'title' => 'Decal trang trí cửa hàng', 'size' => '2x1.5m'],
                ['category' => 'bang-hieu', 'image' => 'sample-sign-1.jpg', 'title' => 'Bảng hiệu LED nhà hàng', 'size' => '4x1m'],
                ['category' => 'backdrop', 'image' => 'sample-backdrop-1.jpg', 'title' => 'Backdrop tiệc cưới', 'size' => '6x3m'],
                ['category' => 'uv-bat', 'image' => 'sample-uv-bat-2.jpg', 'title' => 'Banner khuyến mãi', 'size' => '2x3m'],
                ['category' => 'decal', 'image' => 'sample-decal-2.jpg', 'title' => 'Decal dán kính văn phòng', 'size' => '1.5x2m']
            ];

            foreach ($portfolio_items as $item): ?>
                <div class="portfolio-item" data-category="<?php echo $item['category']; ?>">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/<?php echo $item['image']; ?>"
                            alt="<?php echo $item['title']; ?>" loading="lazy">
                        <div class="portfolio-overlay">
                            <h4><?php echo $item['title']; ?></h4>
                            <p>Kích thước: <?php echo $item['size']; ?></p>
                            <a href="#" class="portfolio-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Services Deep Dive -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">
                Dịch Vụ <span class="highlight">Chuyên Sâu</span>
            </h2>
        </div>

        <div class="services-tabs">
            <div class="tab-navigation">
                <button class="tab-btn active" data-tab="uv-printing">In UV</button>
                <button class="tab-btn" data-tab="digital-printing">In Digital</button>
                <button class="tab-btn" data-tab="signage">Bảng hiệu</button>
                <button class="tab-btn" data-tab="design">Thiết kế</button>
            </div>

            <div class="tab-content">
                <div class="tab-panel active" id="uv-printing">
                    <div class="service-detail">
                        <div class="service-info">
                            <h3>In UV Chuyên Nghiệp</h3>
                            <p class="service-desc">
                                Công nghệ in UV hiện đại nhất với máy móc nhập khẩu từ Nhật Bản,
                                đảm bảo chất lượng in sắc nét và độ bền màu vượt trội.
                            </p>

                            <div class="service-features">
                                <div class="feature-item">
                                    <div class="feature-icon">🎨</div>
                                    <div class="feature-content">
                                        <h5>Màu sắc sống động</h5>
                                        <p>Công nghệ 8 màu CMYK + White + Varnish</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">💧</div>
                                    <div class="feature-content">
                                        <h5>Chống thấm nước</h5>
                                        <p>Mực UV đặc biệt, chống nước 100%</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">☀️</div>
                                    <div class="feature-content">
                                        <h5>Chống UV</h5>
                                        <p>Bảo vệ màu sắc dưới ánh nắng mặt trời</p>
                                    </div>
                                </div>
                            </div>

                            <div class="price-table">
                                <h5>Bảng giá tham khảo</h5>
                                <table>
                                    <tr>
                                        <td>In UV Bạt Hiflex</td>
                                        <td>25,000đ/m²</td>
                                    </tr>
                                    <tr>
                                        <td>In UV Decal trong</td>
                                        <td>15,000đ/m²</td>
                                    </tr>
                                    <tr>
                                        <td>In UV Decal dán kính</td>
                                        <td>18,000đ/m²</td>
                                    </tr>
                                </table>
                            </div>

                            <a href="#calculator" class="btn-primary">Tính giá chi tiết</a>
                        </div>
                        <div class="service-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uv-printing-process.jpg"
                                alt="Quy trình in UV" class="service-image">
                            <div class="media-overlay">
                                <button class="play-btn" data-video="uv-process">
                                    ▶️ Xem quy trình in UV
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thêm các tab khác tương tự -->
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">
                Câu Hỏi <span class="highlight">Thường Gặp</span>
            </h2>
        </div>

        <div class="faq-container">
            <?php
            $faqs = [
                ['q' => 'Thời gian sản xuất mất bao lâu?', 'a' => 'Thời gian sản xuất thông thường từ 1-3 ngày làm việc tùy theo loại sản phẩm và số lượng. Với đơn hàng gấp, chúng tôi có dịch vụ Express 24h.'],
                ['q' => 'Có hỗ trợ thiết kế miễn phí không?', 'a' => 'Có, chúng tôi hỗ trợ thiết kế miễn phí cho tất cả đơn hàng từ 500,000đ trở lên. Đội ngũ designer chuyên nghiệp sẽ tư vấn và thiết kế theo yêu cầu.'],
                ['q' => 'Chất lượng in có được đảm bảo?', 'a' => 'Chúng tôi cam kết chất lượng với chính sách hoàn tiền 100% nếu sản phẩm không đạt yêu cầu. Tất cả sản phẩm đều được kiểm tra kỹ lưỡng trước khi giao.'],
                ['q' => 'Có giao hàng toàn quốc không?', 'a' => 'Có, chúng tôi giao hàng toàn quốc qua các đơn vị vận chuyển uy tín. Miễn phí giao hàng cho đơn hàng trên 1,000,000đ trong nội thành TP.HCM.'],
                ['q' => 'Thanh toán như thế nào?', 'a' => 'Chúng tôi hỗ trợ nhiều hình thức thanh toán: tiền mặt, chuyển khoản, ví điện tử (MoMo, ZaloPay), thẻ tín dụng. Có thể thanh toán 50% trước khi sản xuất.']
            ];

            foreach ($faqs as $index => $faq): ?>
                <div class="faq-item">
                    <button class="faq-question" data-faq="<?php echo $index; ?>">
                        <span><?php echo $faq['q']; ?></span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p><?php echo $faq['a']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="final-cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Sẵn Sàng Bắt Đầu Dự Án?</h2>
            <p>Hơn 15,000 khách hàng đã tin tưởng - Bạn sẽ là người tiếp theo?</p>

            <div class="cta-options">
                <div class="cta-option priority">
                    <div class="option-badge">🔥 Ưu tiên</div>
                    <h4>Gọi tư vấn ngay</h4>
                    <p>Nhận báo giá trong 5 phút</p>
                    <a href="tel:0123456789" class="cta-btn primary">
                        📞 0123.456.789
                    </a>
                </div>

                <div class="cta-option">
                    <div class="option-badge">💬 Tiện lợi</div>
                    <h4>Chat với chuyên gia</h4>
                    <p>Tư vấn chi tiết qua Zalo/Messenger</p>
                    <a href="#" class="cta-btn secondary">
                        💬 Chat ngay
                    </a>
                </div>

                <div class="cta-option">
                    <div class="option-badge">📧 Chuyên sâu</div>
                    <h4>Gửi yêu cầu chi tiết</h4>
                    <p>Nhận proposal đầy đủ qua email</p>
                    <a href="#" class="cta-btn tertiary">
                        📧 Gửi yêu cầu
                    </a>
                </div>
            </div>

            <div class="urgency-indicator">
                <span class="urgency-text">⚡ Chỉ còn 3 slot tư vấn miễn phí hôm nay</span>
                <div class="urgency-timer" id="urgencyTimer">23:45:12</div>
            </div>
        </div>
    </div>
</section>

</main>
</div>

<!-- Floating Action Buttons -->
<div class="floating-actions">
    <div class="floating-btn calculator-toggle" data-target="#calculator">
        <span class="fab-icon">🧮</span>
        <span class="fab-label">Tính giá</span>
    </div>
    <div class="floating-btn chat-toggle">
        <span class="fab-icon">💬</span>
        <span class="fab-label">Chat</span>
        <div class="notification-dot"></div>
    </div>
    <div class="floating-btn phone-toggle">
        <span class="fab-icon">📞</span>
        <span class="fab-label">Gọi ngay</span>
    </div>
</div>

<!-- Modal cho Quote Form -->
<div class="modal-overlay" id="quoteModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>📋 Gửi Yêu Cầu Báo Giá</h3>
            <button class="modal-close">&times;</button>
        </div>
        <form class="quote-request-form" id="quoteRequestForm">
            <div class="form-grid">
                <div class="form-group">
                    <label for="customerName">Họ tên *</label>
                    <input type="text" id="customerName" name="customer_name" required>
                </div>
                <div class="form-group">
                    <label for="customerPhone">Số điện thoại *</label>
                    <input type="tel" id="customerPhone" name="customer_phone" required>
                </div>
                <div class="form-group">
                    <label for="customerEmail">Email</label>
                    <input type="email" id="customerEmail" name="customer_email">
                </div>
                <div class="form-group">
                    <label for="customerCompany">Công ty</label>
                    <input type="text" id="customerCompany" name="customer_company">
                </div>
            </div>

            <div class="form-group full-width">
                <label for="projectDescription">Mô tả chi tiết dự án *</label>
                <textarea id="projectDescription" name="project_description" rows="4" required></textarea>
            </div>

            <div class="form-group full-width">
                <label for="fileUpload">Đính kèm file thiết kế (nếu có)</label>
                <div class="file-upload-area">
                    <input type="file" id="fileUpload" name="design_files[]" multiple accept=".pdf,.jpg,.jpeg,.png,.ai,.psd">
                    <div class="upload-placeholder">
                        <span class="upload-icon">📁</span>
                        <span>Kéo thả file hoặc click để chọn</span>
                        <small>Hỗ trợ: PDF, JPG, PNG, AI, PSD (Max 10MB)</small>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">
                    🚀 Gửi yêu cầu
                </button>
                <button type="button" class="btn-secondary modal-close">
                    Hủy bỏ
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Schema Markup cho SEO -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "InUV247 - In Ấn Chuyên Nghiệp",
        "description": "Dịch vụ in ấn UV, thiết kế đồ họa chuyên nghiệp với báo giá tự động và giao hàng toàn quốc",
        "url": "<?php echo home_url('/bao-gia-in-va-thiet-ke/'); ?>",
        "telephone": "0123456789",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Đường ABC",
            "addressLocality": "TP. Hồ Chí Minh",
            "addressCountry": "VN"
        },
        "openingHours": "Mo-Su 08:00-22:00",
        "priceRange": "$",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Dịch vụ in ấn",
            "itemListElement": [{
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "In UV Bạt"
                    },
                    "price": "25000",
                    "priceCurrency": "VND"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "In UV Decal"
                    },
                    "price": "15000",
                    "priceCurrency": "VND"
                }
            ]
        }
    }
</script>

<script>
    // Portfolio Filter
    class PortfolioFilter {
        constructor() {
            this.init();
        }

        init() {
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', (e) => this.filterItems(e));
            });
        }

        filterItems(e) {
            const filter = e.target.dataset.filter;

            // Update active button
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            e.target.classList.add('active');

            // Filter portfolio items
            document.querySelectorAll('.portfolio-item').forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeInUp 0.5s ease';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    }

    // FAQ Accordion
    class FAQAccordion {
        constructor() {
            this.init();
        }

        init() {
            document.querySelectorAll('.faq-question').forEach(btn => {
                btn.addEventListener('click', (e) => this.toggleFAQ(e));
            });
        }

        toggleFAQ(e) {
            const question = e.currentTarget;
            const faqItem = question.parentNode;
            const answer = faqItem.querySelector('.faq-answer');
            const icon = question.querySelector('.faq-icon');

            // Close other FAQs
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.classList.remove('active');
                    item.querySelector('.faq-icon').textContent = '+';
                }
            });

            // Toggle current FAQ
            faqItem.classList.toggle('active');
            icon.textContent = faqItem.classList.contains('active') ? '-' : '+';
        }
    }

    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        new PortfolioFilter();
        new FAQAccordion();

        // Initialize other components
        initFloatingActions();
        initModals();
        initUrgencyTimer();
    });

    // Floating Actions
    function initFloatingActions() {
        document.querySelectorAll('.floating-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const target = this.dataset.target;
                if (target) {
                    document.querySelector(target).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Modal Functions
    function initModals() {
        document.querySelectorAll('.modal-close').forEach(btn => {
            btn.addEventListener('click', function() {
                this.closest('.modal-overlay').style.display = 'none';
            });
        });
    }

    // Save Quote Function
    function saveQuote() {
        const quoteData = {
            product: document.getElementById('selectedProduct').value,
            width: document.getElementById('width').value,
            height: document.getElementById('height').value,
            quantity: document.getElementById('quantity').value,
            totalPrice: document.getElementById('totalPrice').textContent,
            timestamp: new Date().toISOString()
        };

        localStorage.setItem('savedQuote', JSON.stringify(quoteData));
        alert('Báo giá đã được lưu! Bạn có thể quay lại xem sau.');
    }

    // Urgency Timer
    function initUrgencyTimer() {
        const timer = document.getElementById('urgencyTimer');
        if (!timer) return;

        let timeLeft = 24 * 60 * 60; // 24 hours in seconds

        setInterval(() => {
            const hours = Math.floor(timeLeft / 3600);
            const minutes = Math.floor((timeLeft % 3600) / 60);
            const seconds = timeLeft % 60;

            timer.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            timeLeft--;
            if (timeLeft < 0) timeLeft = 24 * 60 * 60; // Reset timer
        }, 1000);
    }
</script>

<?php get_footer(); ?>