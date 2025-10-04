<?php

/**
 * Template Name: Dịch Vụ In UV
 * Description: Landing page dịch vụ in với blog posts integration
 */

get_header(); ?>

<div id="primary" class="content-area services-landing-page">
    <main id="main" class="site-main">

        <!-- Hero Section với Dynamic Content -->
        <section class="hero-section" id="hero">
            <div class="particles-bg" id="particles-js"></div>
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="badge-text">🏆 #1 Việt Nam</span>
                    </div>
                    <h1 class="hero-title">
                        <span class="title-main">Dịch Vụ In UV</span>
                        <span class="title-highlight">Chuyên Nghiệp & Chất Lượng</span>
                    </h1>
                    <p class="hero-subtitle">
                        Công nghệ <strong>In UV Nhật Bản</strong> - Chất lượng <strong>Châu Âu</strong> -
                        Giá cả <strong>cạnh tranh nhất</strong> thị trường
                    </p>

                    <!-- Hero Features Grid -->
                    <div class="hero-features">
                        <div class="hero-feature">
                            <div class="feature-icon">🎨</div>
                            <div class="feature-text">
                                <h4>In UV Đa Chất Liệu</h4>
                                <p>Bạt, decal, mica, gỗ, kim loại...</p>
                            </div>
                        </div>
                        <div class="hero-feature">
                            <div class="feature-icon">⚡</div>
                            <div class="feature-text">
                                <h4>Giao Hàng Nhanh</h4>
                                <p>Express 4-24h toàn quốc</p>
                            </div>
                        </div>
                        <div class="hero-feature">
                            <div class="feature-icon">✨</div>
                            <div class="feature-text">
                                <h4>Chất Lượng Cao</h4>
                                <p>Bảo hành 24 tháng</p>
                            </div>
                        </div>
                    </div>

                    <div class="hero-actions">
                        <a href="#calculator" class="btn-primary pulse">
                            <span class="btn-icon">💰</span>
                            Báo Giá Miễn Phí
                        </a>
                        <a href="#services" class="btn-secondary">
                            <span class="btn-icon">📋</span>
                            Xem Dịch Vụ
                        </a>
                        <a href="tel:0123456789" class="btn-call">
                            <span class="btn-icon">📞</span>
                            Gọi Tư Vấn Ngay
                        </a>
                    </div>
                </div>

                <!-- Hero Media với Video Showcase -->
                <div class="hero-media">
                    <div class="media-showcase">
                        <div class="showcase-main">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uv-printing-showcase.jpg"
                                alt="Máy in UV chuyên nghiệp" class="main-image">
                            <div class="play-overlay" data-video="uv-process">
                                <div class="play-button">
                                    <span class="play-icon">▶️</span>
                                    <span class="play-text">Xem quy trình in UV</span>
                                </div>
                            </div>
                        </div>

                        <div class="showcase-grid">
                            <div class="showcase-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uv-sample-1.jpg" alt="Mẫu in UV 1">
                                <div class="item-overlay">
                                    <span>In UV Bạt</span>
                                </div>
                            </div>
                            <div class="showcase-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uv-sample-2.jpg" alt="Mẫu in UV 2">
                                <div class="item-overlay">
                                    <span>In UV Decal</span>
                                </div>
                            </div>
                            <div class="showcase-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uv-sample-3.jpg" alt="Mẫu in UV 3">
                                <div class="item-overlay">
                                    <span>In UV Mica</span>
                                </div>
                            </div>
                            <div class="showcase-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uv-sample-4.jpg" alt="Mẫu in UV 4">
                                <div class="item-overlay">
                                    <span>In UV Gỗ</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quality Badges -->
                    <div class="quality-badges">
                        <div class="quality-badge">
                            <span class="badge-icon">🌟</span>
                            <span class="badge-text">ISO<br>9001:2015</span>
                        </div>
                        <div class="quality-badge">
                            <span class="badge-icon">🛡️</span>
                            <span class="badge-text">Bảo hành<br>24 tháng</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust Indicators với Stats -->
        <section class="trust-section">
            <div class="container">
                <div class="trust-stats">
                    <div class="stat-item">
                        <div class="stat-number" data-target="15000">0</div>
                        <div class="stat-label">Khách hàng tin tưởng</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="50000">0</div>
                        <div class="stat-label">Sản phẩm hoàn thành</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="99">0</div>
                        <div class="stat-label">% Khách hàng hài lòng</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="10">0</div>
                        <div class="stat-label">Năm kinh nghiệm</div>
                    </div>
                </div>

                <div class="trust-brands">
                    <h3>Đối tác tin cậy</h3>
                    <div class="brands-slider">
                        <?php
                        $brands = ['vingroup', 'fpt', 'viettel', 'sacombank', 'techcombank', 'vinamilk'];
                        foreach ($brands as $brand): ?>
                            <div class="brand-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/<?php echo $brand; ?>.png"
                                    alt="<?php echo ucfirst($brand); ?>" loading="lazy">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Showcase với SEO Blog Integration -->
        <section class="services-showcase" id="services">
            <div class="container">
                <div class="section-header">
                    <div class="section-badge">🎯 DỊCH VỤ CHÍNH</div>
                    <h2 class="section-title">
                        Dịch Vụ <span class="highlight">In UV</span> Chuyên Nghiệp
                    </h2>
                    <p class="section-subtitle">
                        Từ thiết kế đến sản xuất hoàn thiện - Một cửa giải quyết mọi nhu cầu in ấn
                    </p>
                </div>

                <div class="services-grid">
                    <?php
                    $services = [
                        [
                            'id' => 'uv-bat',
                            'icon' => '🎨',
                            'title' => 'In UV Bạt Hiflex',
                            'subtitle' => 'Chất lượng cao - Giá cạnh tranh',
                            'description' => 'In UV trên bạt hiflex chất lượng cao, màu sắc sống động, chống thấm nước 100%. Phù hợp cho bảng hiệu, quảng cáo ngoài trời.',
                            'features' => ['Chống thấm nước', 'Chống UV', 'Màu sắc bền đẹp', 'Giao hàng nhanh'],
                            'price_from' => '25,000',
                            'popular' => true,
                            'blog_slug' => 'gia-in-uv-bat',
                            'gallery' => ['uv-bat-1.jpg', 'uv-bat-2.jpg', 'uv-bat-3.jpg']
                        ],
                        [
                            'id' => 'uv-decal',
                            'icon' => '📋',
                            'title' => 'In UV Decal',
                            'subtitle' => 'Dán kính - Dán tường chuyên nghiệp',
                            'description' => 'In decal UV chất lượng cao, dán kính văn phòng, dán tường trang trí. Độ bám dính tốt, dễ thi công.',
                            'features' => ['Độ bám dính cao', 'Không phai màu', 'Dễ thi công', 'Tháo lắp không dính keo'],
                            'price_from' => '15,000',
                            'popular' => false,
                            'blog_slug' => 'gia-in-uv-decal',
                            'gallery' => ['uv-decal-1.jpg', 'uv-decal-2.jpg', 'uv-decal-3.jpg']
                        ],
                        [
                            'id' => 'bang-hieu',
                            'icon' => '🏪',
                            'title' => 'Bảng Hiệu LED',
                            'subtitle' => 'Mica - Chữ nổi 3D - Hộp đèn',
                            'description' => 'Thiết kế và thi công bảng hiệu mica LED, chữ nổi 3D, hộp đèn quảng cáo. Tư vấn thiết kế miễn phí.',
                            'features' => ['LED tiết kiệm điện', 'Thiết kế miễn phí', 'Thi công chuyên nghiệp', 'Bảo hành 2 năm'],
                            'price_from' => '180,000',
                            'popular' => false,
                            'blog_slug' => 'gia-lam-bang-hieu-led',
                            'gallery' => ['bang-hieu-1.jpg', 'bang-hieu-2.jpg', 'bang-hieu-3.jpg']
                        ],
                        [
                            'id' => 'standee',
                            'icon' => '🎯',
                            'title' => 'Standee Quảng Cáo',
                            'subtitle' => 'X-Banner - Roll up - Poster',
                            'description' => 'In standee khổ lớn, X-banner, roll up banner chất lượng cao. Chân đỡ aluminum chắc chắn, dễ vận chuyển.',
                            'features' => ['Chân đỡ chắc chắn', 'Dễ lắp đặt', 'Thiết kế ấn tượng', 'Giá cả hợp lý'],
                            'price_from' => '120,000',
                            'popular' => true,
                            'blog_slug' => 'gia-in-standee',
                            'gallery' => ['standee-1.jpg', 'standee-2.jpg', 'standee-3.jpg']
                        ],
                        [
                            'id' => 'backdrop',
                            'icon' => '🎭',
                            'title' => 'Backdrop Sự Kiện',
                            'subtitle' => 'Cưới hỏi - Khai trương - Hội nghị',
                            'description' => 'In backdrop phông nền sự kiện, tiệc cưới, khai trương với chất lượng in sắc nét, màu sắc chân thực.',
                            'features' => ['Chất lượng in cao', 'Thiết kế theo yêu cầu', 'Giao hàng đúng hẹn', 'Hỗ trợ lắp đặt'],
                            'price_from' => '35,000',
                            'popular' => false,
                            'blog_slug' => 'gia-in-backdrop',
                            'gallery' => ['backdrop-1.jpg', 'backdrop-2.jpg', 'backdrop-3.jpg']
                        ],
                        [
                            'id' => 'in-an',
                            'icon' => '📄',
                            'title' => 'In Ấn Văn Phòng',
                            'subtitle' => 'Name card - Brochure - Catalogue',
                            'description' => 'Dịch vụ in ấn văn phòng chuyên nghiệp: name card, brochure, catalogue, tờ rơi với chất lượng cao.',
                            'features' => ['Giấy cao cấp', 'Gia công đa dạng', 'Thiết kế chuyên nghiệp', 'Giao hàng nhanh'],
                            'price_from' => '500',
                            'popular' => false,
                            'blog_slug' => 'gia-in-name-card',
                            'gallery' => ['in-an-1.jpg', 'in-an-2.jpg', 'in-an-3.jpg']
                        ]
                    ];

                    foreach ($services as $service): ?>
                        <div class="service-card <?php echo $service['popular'] ? 'popular' : ''; ?>" data-service="<?php echo $service['id']; ?>">
                            <?php if ($service['popular']): ?>
                                <div class="popular-badge">
                                    <span class="badge-icon">🔥</span>
                                    <span class="badge-text">Phổ biến</span>
                                </div>
                            <?php endif; ?>

                            <div class="service-header">
                                <div class="service-icon"><?php echo $service['icon']; ?></div>
                                <div class="service-meta">
                                    <h3><?php echo $service['title']; ?></h3>
                                    <p class="service-subtitle"><?php echo $service['subtitle']; ?></p>
                                </div>
                            </div>

                            <div class="service-content">
                                <p class="service-description"><?php echo $service['description']; ?></p>

                                <div class="service-features">
                                    <?php foreach ($service['features'] as $feature): ?>
                                        <div class="feature-item">
                                            <span class="feature-check">✓</span>
                                            <span><?php echo $feature; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="service-gallery">
                                    <?php foreach ($service['gallery'] as $index => $image): ?>
                                        <div class="gallery-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/<?php echo $image; ?>"
                                                alt="<?php echo $service['title']; ?> - Mẫu <?php echo $index + 1; ?>" loading="lazy">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="service-footer">
                                <div class="service-price">
                                    <span class="price-label">Giá từ</span>
                                    <span class="price-value"><?php echo $service['price_from']; ?>đ</span>
                                    <span class="price-unit">/m²</span>
                                </div>

                                <div class="service-actions">
                                    <a href="<?php echo home_url('/bao-gia-in-va-thiet-ke/?service=' . $service['id']); ?>"
                                        class="btn-primary btn-sm">
                                        💰 Báo giá
                                    </a>
                                    <a href="<?php echo home_url('/' . $service['blog_slug'] . '/'); ?>"
                                        class="btn-secondary btn-sm">
                                        📖 Chi tiết
                                    </a>
                                    <button class="btn-gallery btn-sm" data-service="<?php echo $service['id']; ?>">
                                        🖼️ Xem mẫu
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Technology & Process -->
        <section class="technology-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">
                        Công Nghệ <span class="highlight">Hàng Đầu</span>
                    </h2>
                    <p class="section-subtitle">
                        Đầu tư máy móc hiện đại nhất để mang đến chất lượng tốt nhất
                    </p>
                </div>

                <div class="tech-showcase">
                    <div class="tech-content">
                        <div class="tech-tabs">
                            <button class="tech-tab active" data-tab="machines">🏭 Máy móc</button>
                            <button class="tech-tab" data-tab="materials">🧪 Vật liệu</button>
                            <button class="tech-tab" data-tab="process">⚙️ Quy trình</button>
                            <button class="tech-tab" data-tab="quality">✅ Kiểm tra</button>
                        </div>

                        <div class="tech-panels">
                            <div class="tech-panel active" id="machines">
                                <h3>Máy In UV Nhật Bản</h3>
                                <div class="tech-features">
                                    <div class="tech-feature">
                                        <div class="feature-icon">🎯</div>
                                        <div class="feature-info">
                                            <h4>Độ phân giải cao</h4>
                                            <p>1440 DPI - Chi tiết sắc nét tuyệt đối</p>
                                        </div>
                                    </div>
                                    <div class="tech-feature">
                                        <div class="feature-icon">🌈</div>
                                        <div class="feature-info">
                                            <h4>8 màu CMYK + White</h4>
                                            <p>Màu sắc sống động, bao phủ 95% không gian màu</p>
                                        </div>
                                    </div>
                                    <div class="tech-feature">
                                        <div class="feature-icon">⚡</div>
                                        <div class="feature-info">
                                            <h4>Tốc độ in nhanh</h4>
                                            <p>150m²/giờ - Giao hàng đúng deadline</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tech-panel" id="materials">
                                <h3>Vật Liệu Cao Cấp</h3>
                                <div class="materials-grid">
                                    <div class="material-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials/hiflex.jpg" alt="Bạt Hiflex">
                                        <h4>Bạt Hiflex Hàn Quốc</h4>
                                        <p>Chống thấm, chống UV, độ bền 5+ năm</p>
                                    </div>
                                    <div class="material-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials/decal.jpg" alt="Decal">
                                        <h4>Decal 3M Mỹ</h4>
                                        <p>Độ bám dính cao, không để lại vết khi tháo</p>
                                    </div>
                                    <div class="material-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials/mica.jpg" alt="Mica">
                                        <h4>Mica Đức</h4>
                                        <p>Trong suốt, chống vỡ, uốn cong tốt</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tech-panel" id="process">
                                <h3>Quy Trình 5 Bước</h3>
                                <div class="process-steps">
                                    <div class="process-step">
                                        <div class="step-number">1</div>
                                        <div class="step-content">
                                            <h4>Tư vấn thiết kế</h4>
                                            <p>Hiểu nhu cầu - Tư vấn giải pháp tối ưu</p>
                                        </div>
                                    </div>
                                    <div class="process-step">
                                        <div class="step-number">2</div>
                                        <div class="step-content">
                                            <h4>Thiết kế & duyệt mẫu</h4>
                                            <p>Thiết kế chuyên nghiệp - Duyệt mẫu online</p>
                                        </div>
                                    </div>
                                    <div class="process-step">
                                        <div class="step-number">3</div>
                                        <div class="step-content">
                                            <h4>In ấn sản xuất</h4>
                                            <p>Máy móc hiện đại - Quy trình chuẩn hóa</p>
                                        </div>
                                    </div>
                                    <div class="process-step">
                                        <div class="step-number">4</div>
                                        <div class="step-content">
                                            <h4>Kiểm tra chất lượng</h4>
                                            <p>QC nghiêm ngặt - Đảm bảo chất lượng</p>
                                        </div>
                                    </div>
                                    <div class="process-step">
                                        <div class="step-number">5</div>
                                        <div class="step-content">
                                            <h4>Đóng gói & giao hàng</h4>
                                            <p>Đóng gói cẩn thận - Giao hàng đúng hẹn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tech-panel" id="quality">
                                <h3>Kiểm Tra Chất Lượng</h3>
                                <div class="quality-checks">
                                    <div class="quality-item">
                                        <div class="quality-icon">🔍</div>
                                        <h4>Kiểm tra màu sắc</h4>
                                        <p>So sánh với mẫu chuẩn, đảm bảo độ chính xác 99%</p>
                                    </div>
                                    <div class="quality-item">
                                        <div class="quality-icon">📏</div>
                                        <h4>Kiểm tra kích thước</h4>
                                        <p>Sai số không quá 1mm, đáp ứng yêu cầu khắt khe</p>
                                    </div>
                                    <div class="quality-item">
                                        <div class="quality-icon">🧪</div>
                                        <h4>Test độ bền</h4>
                                        <p>Thử nghiệm chống thấm, chống UV, độ bám dính</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tech-media">
                        <div class="tech-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technology/uv-printer.jpg"
                                alt="Máy in UV chuyên nghiệp" id="techImage">
                        </div>
                        <div class="tech-stats">
                            <div class="stat-item">
                                <div class="stat-number">1440</div>
                                <div class="stat-label">DPI</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">8</div>
                                <div class="stat-label">Màu in</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">150</div>
                                <div class="stat-label">m²/giờ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Posts Integration -->
        <section class="blog-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">
                        Bảng Giá & <span class="highlight">Hướng Dẫn</span>
                    </h2>
                    <p class="section-subtitle">
                        Cập nhật thông tin giá cả và hướng dẫn chi tiết về dịch vụ in ấn
                    </p>
                </div>

                <div class="blog-grid">
                    <?php
                    // Query related blog posts
                    $blog_posts = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'meta_query' => [
                            [
                                'key' => 'featured_service',
                                'value' => 'yes',
                                'compare' => '='
                            ]
                        ]
                    ]);

                    if (!$blog_posts->have_posts()) {
                        // Fallback static content for demo
                        $static_posts = [
                            [
                                'title' => 'Bảng Giá In UV Bạt 2024 - Cập Nhật Mới Nhất',
                                'excerpt' => 'Tổng hợp bảng giá in UV bạt hiflex chi tiết nhất thị trường. So sánh giá và chất lượng từ các nhà cung cấp uy tín.',
                                'link' => '/gia-in-uv-bat-2024/',
                                'category' => 'Bảng Giá',
                                'image' => 'blog-uv-bat-price.jpg',
                                'featured' => true
                            ],
                            [
                                'title' => 'Hướng Dẫn Chọn Chất Liệu In UV Phù Hợp',
                                'excerpt' => 'Tư vấn chi tiết cách chọn chất liệu in UV phù hợp với từng mục đích sử dụng và ngân sách.',
                                'link' => '/chon-chat-lieu-in-uv/',
                                'category' => 'Hướng Dẫn',
                                'image' => 'blog-material-guide.jpg',
                                'featured' => false
                            ],
                            [
                                'title' => 'Quy Trình Thiết Kế Bảng Hiệu Chuyên Nghiệp',
                                'excerpt' => 'Từ ý tưởng đến thành phẩm - Quy trình thiết kế bảng hiệu LED mica đạt chuẩn thẩm mỹ và kỹ thuật.',
                                'link' => '/thiet-ke-bang-hieu-chuyen-nghiep/',
                                'category' => 'Thiết Kế',
                                'image' => 'blog-signage-design.jpg',
                                'featured' => false
                            ],
                            [
                                'title' => 'So Sánh In UV vs In Thường - Ưu Nhược Điểm',
                                'excerpt' => 'Phân tích chi tiết ưu nhược điểm của công nghệ in UV so với in offset và in kỹ thuật số thông thường.',
                                'link' => '/so-sanh-in-uv-vs-in-thuong/',
                                'category' => 'Kiến Thức',
                                'image' => 'blog-uv-comparison.jpg',
                                'featured' => true
                            ],
                            [
                                'title' => 'Cách Bảo Quản Sản Phẩm In UV Để Được Lâu',
                                'excerpt' => 'Hướng dẫn cách bảo quản bạt in UV, decal và các sản phẩm in ấn để đảm bảo độ bền màu cao nhất.',
                                'link' => '/bao-quan-san-pham-in-uv/',
                                'category' => 'Bảo Quản',
                                'image' => 'blog-maintenance.jpg',
                                'featured' => false
                            ],
                            [
                                'title' => 'Xu Hướng Thiết Kế Bảng Hiệu 2024',
                                'excerpt' => 'Cập nhật những xu hướng thiết kế bảng hiệu mới nhất năm 2024 từ minimalist đến interactive design.',
                                'link' => '/xu-huong-thiet-ke-bang-hieu-2024/',
                                'category' => 'Xu Hướng',
                                'image' => 'blog-trends-2024.jpg',
                                'featured' => false
                            ]
                        ];

                        foreach ($static_posts as $post): ?>
                            <article class="blog-card <?php echo $post['featured'] ? 'featured' : ''; ?>">
                                <?php if ($post['featured']): ?>
                                    <div class="featured-badge">
                                        <span class="badge-icon">⭐</span>
                                        <span class="badge-text">Nổi bật</span>
                                    </div>
                                <?php endif; ?>

                                <div class="blog-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/<?php echo $post['image']; ?>"
                                        alt="<?php echo $post['title']; ?>" loading="lazy">
                                    <div class="blog-category"><?php echo $post['category']; ?></div>
                                </div>

                                <div class="blog-content">
                                    <h3 class="blog-title">
                                        <a href="<?php echo home_url($post['link']); ?>"><?php echo $post['title']; ?></a>
                                    </h3>
                                    <p class="blog-excerpt"><?php echo $post['excerpt']; ?></p>

                                    <div class="blog-meta">
                                        <span class="meta-item">
                                            <span class="meta-icon">📅</span>
                                            <span>Cập nhật mới</span>
                                        </span>
                                        <span class="meta-item">
                                            <span class="meta-icon">👁️</span>
                                            <span>2.5k lượt xem</span>
                                        </span>
                                    </div>

                                    <a href="<?php echo home_url($post['link']); ?>" class="blog-link">
                                        Đọc chi tiết <span class="link-arrow">→</span>
                                    </a>
                                </div>
                            </article>
                        <?php endforeach;
                    } else {
                        while ($blog_posts->have_posts()): $blog_posts->the_post(); ?>
                            <article class="blog-card">
                                <div class="blog-image">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('medium', ['loading' => 'lazy']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/default.jpg"
                                            alt="<?php the_title(); ?>" loading="lazy">
                                    <?php endif; ?>

                                    <div class="blog-category">
                                        <?php
                                        $categories = get_the_category();
                                        if ($categories) echo $categories[0]->name;
                                        ?>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <h3 class="blog-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

                                    <div class="blog-meta">
                                        <span class="meta-item">
                                            <span class="meta-icon">📅</span>
                                            <span><?php echo get_the_date('d/m/Y'); ?></span>
                                        </span>
                                        <span class="meta-item">
                                            <span class="meta-icon">👁️</span>
                                            <span><?php echo get_post_meta(get_the_ID(), 'post_views', true) ?: '0'; ?> lượt xem</span>
                                        </span>
                                    </div>

                                    <a href="<?php the_permalink(); ?>" class="blog-link">
                                        Đọc chi tiết <span class="link-arrow">→</span>
                                    </a>
                                </div>
                            </article>
                    <?php endwhile;
                        wp_reset_postdata();
                    } ?>
                </div>

                <div class="blog-cta">
                    <a href="<?php echo home_url('/blog/'); ?>" class="btn-primary">
                        📚 Xem Tất Cả Bài Viết
                    </a>
                </div>
            </div>
        </section>

        <!-- Quick Quote Calculator -->
        <section class="quick-calculator" id="calculator">
            <div class="container">
                <div class="calculator-wrapper">
                    <div class="calculator-content">
                        <div class="calculator-header">
                            <h2>⚡ Tính Giá Nhanh</h2>
                            <p>Nhận báo giá chính xác trong 30 giây</p>
                        </div>

                        <form class="quick-form" id="quickQuoteForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Loại sản phẩm</label>
                                    <select name="service" required>
                                        <option value="">Chọn dịch vụ</option>
                                        <option value="uv-bat">In UV Bạt (25,000đ/m²)</option>
                                        <option value="uv-decal">In UV Decal (15,000đ/m²)</option>
                                        <option value="bang-hieu">Bảng Hiệu LED (180,000đ/m²)</option>
                                        <option value="standee">Standee (120,000đ/bộ)</option>
                                        <option value="backdrop">Backdrop (35,000đ/m²)</option>
                                        <option value="in-an">In Ấn VP (500đ/cái)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Kích thước</label>
                                    <div class="size-inputs">
                                        <input type="number" name="width" placeholder="Rộng (cm)" min="1" required>
                                        <span class="size-separator">×</span>
                                        <input type="number" name="height" placeholder="Cao (cm)" min="1" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input type="number" name="quantity" value="1" min="1" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn-calculate">
                                        💰 Tính Giá
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="quick-result" id="quickResult" style="display: none;">
                            <div class="result-content">
                                <h3>💸 Dự toán chi phí</h3>
                                <div class="result-price">
                                    <span class="price-amount" id="quickPrice">0</span>
                                    <span class="price-currency">VNĐ</span>
                                </div>
                                <p class="result-note">* Giá chưa bao gồm VAT và phí vận chuyển</p>
                                <div class="result-actions">
                                    <a href="tel:0123456789" class="btn-primary">📞 Gọi xác nhận</a>
                                    <button class="btn-secondary" onclick="openQuoteModal()">📋 Báo giá chi tiết</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="calculator-sidebar">
                        <div class="support-card">
                            <div class="support-header">
                                <h4>🎯 Tư Vấn Miễn Phí</h4>
                                <p>Chuyên gia với 10+ năm kinh nghiệm</p>
                            </div>

                            <div class="consultant-info">
                                <div class="consultant-avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultant-uv.jpg"
                                        alt="Chuyên gia tư vấn">
                                    <div class="online-indicator"></div>
                                </div>
                                <div class="consultant-details">
                                    <h5>Mr. Minh Tuấn</h5>
                                    <p>Chuyên gia In UV</p>
                                    <div class="rating">
                                        ⭐⭐⭐⭐⭐ <span>4.9/5</span>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-options">
                                <a href="tel:0123456789" class="contact-btn primary">
                                    📞 Gọi ngay: 0123.456.789
                                </a>
                                <a href="#" class="contact-btn secondary">
                                    💬 Chat Zalo
                                </a>
                                <a href="#" class="contact-btn tertiary">
                                    📧 Email tư vấn
                                </a>
                            </div>

                            <div class="guarantee-info">
                                <h5>🛡️ Cam kết chất lượng</h5>
                                <ul>
                                    <li>✅ Hoàn tiền 100% nếu không hài lòng</li>
                                    <li>✅ Bảo hành sản phẩm 24 tháng</li>
                                    <li>✅ Giao hàng đúng hẹn hoặc miễn phí</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Reviews -->
        <section class="reviews-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">
                        Khách Hàng <span class="highlight">Nói Gì</span>
                    </h2>
                    <p class="section-subtitle">
                        Hơn 15,000 khách hàng tin tưởng và đánh giá cao dịch vụ của chúng tôi
                    </p>
                </div>

                <div class="reviews-showcase">
                    <div class="reviews-stats">
                        <div class="stat-card">
                            <div class="stat-number">4.9</div>
                            <div class="stat-stars">⭐⭐⭐⭐⭐</div>
                            <div class="stat-label">Đánh giá trung bình</div>
                            <div class="stat-note">Từ 3,247 đánh giá</div>
                        </div>

                        <div class="rating-breakdown">
                            <div class="rating-item">
                                <span class="rating-label">5 sao</span>
                                <div class="rating-bar">
                                    <div class="rating-fill" style="width: 89%"></div>
                                </div>
                                <span class="rating-percent">89%</span>
                            </div>
                            <div class="rating-item">
                                <span class="rating-label">4 sao</span>
                                <div class="rating-bar">
                                    <div class="rating-fill" style="width: 8%"></div>
                                </div>
                                <span class="rating-percent">8%</span>
                            </div>
                            <div class="rating-item">
                                <span class="rating-label">3 sao</span>
                                <div class="rating-bar">
                                    <div class="rating-fill" style="width: 2%"></div>
                                </div>
                                <span class="rating-percent">2%</span>
                            </div>
                            <div class="rating-item">
                                <span class="rating-label">2 sao</span>
                                <div class="rating-bar">
                                    <div class="rating-fill" style="width: 1%"></div>
                                </div>
                                <span class="rating-percent">1%</span>
                            </div>
                            <div class="rating-item">
                                <span class="rating-label">1 sao</span>
                                <div class="rating-bar">
                                    <div class="rating-fill" style="width: 0%"></div>
                                </div>
                                <span class="rating-percent">0%</span>
                            </div>
                        </div>
                    </div>

                    <div class="reviews-carousel">
                        <div class="review-cards">
                            <?php
                            $reviews = [
                                [
                                    'name' => 'Anh Đức - Giám đốc Marketing',
                                    'company' => 'Công ty TNHH ABC',
                                    'content' => 'Chất lượng in UV tuyệt vời, màu sắc sống động, giao hàng đúng hẹn. Đã hợp tác nhiều dự án và luôn hài lòng với chất lượng dịch vụ.',
                                    'rating' => 5,
                                    'service' => 'In UV Bạt',
                                    'image' => 'review-1.jpg',
                                    'verified' => true
                                ],
                                [
                                    'name' => 'Chị Hoa - Chủ cửa hàng',
                                    'company' => 'Shop Thời Trang Hoa',
                                    'content' => 'Bảng hiệu LED do InUV247 làm rất đẹp và chất lượng. Đội ngũ tư vấn nhiệt tình, thiết kế theo đúng ý muốn của mình.',
                                    'rating' => 5,
                                    'service' => 'Bảng Hiệu LED',
                                    'image' => 'review-2.jpg',
                                    'verified' => true
                                ],
                                [
                                    'name' => 'Anh Tuấn - Event Manager',
                                    'company' => 'Eventory Vietnam',
                                    'content' => 'In backdrop cho event của công ty, chất lượng in sắc nét, setup nhanh chóng. Giá cả hợp lý, sẽ tiếp tục hợp tác.',
                                    'rating' => 5,
                                    'service' => 'Backdrop Sự Kiện',
                                    'image' => 'review-3.jpg',
                                    'verified' => true
                                ],
                                [
                                    'name' => 'Chị Lan - Quản lý văn phòng',
                                    'company' => 'Công ty Luật XYZ',
                                    'content' => 'Name card và brochure in rất đẹp, giấy chất lượng cao, thiết kế chuyên nghiệp. Nhân viên tư vấn tận tình và chu đáo.',
                                    'rating' => 5,
                                    'service' => 'In Ấn Văn Phòng',
                                    'image' => 'review-4.jpg',
                                    'verified' => true
                                ]
                            ];

                            foreach ($reviews as $review): ?>
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="reviewer-info">
                                            <div class="reviewer-avatar">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews/<?php echo $review['image']; ?>"
                                                    alt="<?php echo $review['name']; ?>">
                                                <?php if ($review['verified']): ?>
                                                    <div class="verified-badge">✓</div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="reviewer-details">
                                                <h4><?php echo $review['name']; ?></h4>
                                                <p><?php echo $review['company']; ?></p>
                                                <div class="service-tag"><?php echo $review['service']; ?></div>
                                            </div>
                                        </div>
                                        <div class="review-rating">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <span class="star <?php echo $i <= $review['rating'] ? 'filled' : ''; ?>">⭐</span>
                                            <?php endfor; ?>
                                        </div>
                                    </div>

                                    <div class="review-content">
                                        <p>"<?php echo $review['content']; ?>"</p>
                                    </div>

                                    <div class="review-meta">
                                        <span class="review-date">Đánh giá vào tháng này</span>
                                        <?php if ($review['verified']): ?>
                                            <span class="verified-tag">✓ Đã xác minh</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="carousel-controls">
                            <button class="carousel-btn prev" onclick="slideReviews('prev')">‹</button>
                            <button class="carousel-btn next" onclick="slideReviews('next')">›</button>
                        </div>
                    </div>
                </div>

                <div class="reviews-cta">
                    <h3>Chia sẻ trải nghiệm của bạn</h3>
                    <p>Giúp chúng tôi cải thiện dịch vụ bằng đánh giá của bạn</p>
                    <a href="#" class="btn-secondary">⭐ Viết đánh giá</a>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="final-cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Sẵn Sàng Bắt Đầu Dự Án In Ấn?</h2>
                    <p>Tư vấn miễn phí - Báo giá trong 30 phút - Ưu đãi đặc biệt cho khách hàng mới</p>

                    <div class="cta-offers">
                        <div class="offer-item">
                            <div class="offer-icon">🎁</div>
                            <div class="offer-text">
                                <h4>Giảm 15%</h4>
                                <p>Đơn hàng đầu tiên</p>
                            </div>
                        </div>
                        <div class="offer-item">
                            <div class="offer-icon">🚀</div>
                            <div class="offer-text">
                                <h4>Miễn phí</h4>
                                <p>Thiết kế & vận chuyển</p>
                            </div>
                        </div>
                        <div class="offer-item">
                            <div class="offer-icon">⚡</div>
                            <div class="offer-text">
                                <h4>Express 24h</h4>
                                <p>Giao hàng nhanh</p>
                            </div>
                        </div>
                    </div>

                    <div class="cta-actions">
                        <a href="tel:0123456789" class="cta-btn primary">
                            📞 Hotline: 0123.456.789
                        </a>
                        <a href="#calculator" class="cta-btn secondary">
                            💰 Tính Giá Ngay
                        </a>
                        <a href="#" class="cta-btn tertiary" onclick="openQuoteModal()">
                            📧 Gửi Yêu Cầu
                        </a>
                    </div>

                    <div class="urgency-timer">
                        <span class="timer-text">🔥 Ưu đãi kết thúc sau:</span>
                        <div class="countdown" id="countdown">
                            <span class="time-unit"><span id="hours">23</span><small>giờ</small></span>
                            <span class="time-separator">:</span>
                            <span class="time-unit"><span id="minutes">59</span><small>phút</small></span>
                            <span class="time-separator">:</span>
                            <span class="time-unit"><span id="seconds">59</span><small>giây</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<!-- Gallery Modal -->
<div class="modal-overlay" id="galleryModal">
    <div class="modal-content gallery-modal">
        <div class="modal-header">
            <h3 id="galleryTitle">Thư viện mẫu</h3>
            <button class="modal-close">&times;</button>
        </div>
        <div class="gallery-content">
            <div class="gallery-main">
                <img id="galleryMainImage" src="" alt="">
                <div class="gallery-controls">
                    <button class="gallery-btn prev" onclick="changeGalleryImage(-1)">‹</button>
                    <button class="gallery-btn next" onclick="changeGalleryImage(1)">›</button>
                </div>
            </div>
            <div class="gallery-thumbnails" id="galleryThumbnails">
                <!-- Thumbnails will be populated by JavaScript -->
            </div>
        </div>
    </div>
</div>

<!-- Quote Request Modal -->
<div class="modal-overlay" id="quoteModal">
    <div class="modal-content quote-modal">
        <div class="modal-header">
            <h3>📋 Gửi Yêu Cầu Báo Giá Chi Tiết</h3>
            <button class="modal-close">&times;</button>
        </div>
        <form class="quote-form" id="detailedQuoteForm">
            <div class="form-section">
                <h4>Thông tin liên hệ</h4>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Họ tên *</label>
                        <input type="text" name="customer_name" required>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại *</label>
                        <input type="tel" name="customer_phone" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="customer_email">
                    </div>
                    <div class="form-group">
                        <label>Công ty</label>
                        <input type="text" name="customer_company">
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h4>Chi tiết dự án</h4>
                <div class="form-group">
                    <label>Loại sản phẩm *</label>
                    <select name="service_type" required>
                        <option value="">Chọn loại sản phẩm</option>
                        <option value="uv-bat">In UV Bạt Hiflex</option>
                        <option value="uv-decal">In UV Decal</option>
                        <option value="bang-hieu">Bảng Hiệu LED</option>
                        <option value="standee">Standee Quảng Cáo</option>
                        <option value="backdrop">Backdrop Sự Kiện</option>
                        <option value="in-an">In Ấn Văn Phòng</option>
                        <option value="other">Khác (ghi rõ trong mô tả)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Mô tả chi tiết dự án *</label>
                    <textarea name="project_description" rows="4" required
                        placeholder="Vui lòng mô tả chi tiết: kích thước, số lượng, chất liệu, thời gian cần hoàn thành..."></textarea>
                </div>

                <div class="form-group">
                    <label>Ngân sách dự kiến</label>
                    <select name="budget_range">
                        <option value="">Chọn mức ngân sách</option>
                        <option value="under-1m">Dưới 1 triệu</option>
                        <option value="1m-5m">1 - 5 triệu</option>
                        <option value="5m-10m">5 - 10 triệu</option>
                        <option value="10m-50m">10 - 50 triệu</option>
                        <option value="over-50m">Trên 50 triệu</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Đính kèm file thiết kế (nếu có)</label>
                    <div class="file-upload">
                        <input type="file" name="design_files[]" multiple accept=".pdf,.jpg,.jpeg,.png,.ai,.psd,.cdr">
                        <div class="upload-area">
                            <span class="upload-icon">📁</span>
                            <span>Kéo thả file hoặc click để chọn</span>
                            <small>Hỗ trợ: PDF, JPG, PNG, AI, PSD, CDR (Max 10MB/file)</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">
                    🚀 Gửi Yêu Cầu
                </button>
                <button type="button" class="btn-secondary modal-close">
                    Hủy Bỏ
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Floating Elements -->
<div class="floating-elements">
    <!-- Quick Calculator Toggle -->
    <div class="floating-calculator" onclick="toggleQuickCalculator()">
        <div class="calc-icon">🧮</div>
        <div class="calc-label">Tính giá nhanh</div>
    </div>

    <!-- Contact Buttons -->
    <div class="floating-contacts">
        <a href="#" class="contact-float zalo">
            <span class="contact-icon">💬</span>
            <span class="contact-label">Chat Zalo</span>
        </a>

        <a href="#" class="contact-float messenger">
            <span class="contact-icon">📧</span>
            <span class="contact-label">Messenger</span>
        </a>
    </div>

    <!-- Back to Top -->
    <div class="back-to-top" id="backToTop" onclick="scrollToTop()">
        <span class="top-icon">↑</span>
    </div>
</div>

<!-- Schema Markup for SEO -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "InUV247 - Dịch Vụ In UV Chuyên Nghiệp",
        "description": "Dịch vụ in UV bạt, decal, bảng hiệu LED chuyên nghiệp. Máy móc hiện đại, chất lượng Châu Âu, giá cả cạnh tranh.",
        "url": "<?php echo home_url('/dich-vu-in/'); ?>",
        "telephone": "0123456789",
        "email": "info@inuv247.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Đường ABC",
            "addressLocality": "TP. Hồ Chí Minh",
            "addressCountry": "VN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "10.7769",
            "longitude": "106.7009"
        },
        "openingHours": "Mo-Su 08:00-22:00",
        "priceRange": "$",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "3247"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Dịch vụ in UV",
            "itemListElement": [{
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "In UV Bạt Hiflex",
                        "description": "In UV trên bạt hiflex chất lượng cao, chống thấm nước"
                    },
                    "price": "25000",
                    "priceCurrency": "VND",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "price": "25000",
                        "priceCurrency": "VND",
                        "unitCode": "MTK"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "In UV Decal",
                        "description": "In decal UV dán kính, dán tường chuyên nghiệp"
                    },
                    "price": "15000",
                    "priceCurrency": "VND",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "price": "15000",
                        "priceCurrency": "VND",
                        "unitCode": "MTK"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bảng Hiệu LED",
                        "description": "Thiết kế và thi công bảng hiệu mica LED chuyên nghiệp"
                    },
                    "price": "180000",
                    "priceCurrency": "VND",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "price": "180000",
                        "priceCurrency": "VND",
                        "unitCode": "MTK"
                    }
                }
            ]
        },
        "sameAs": [
            "https://www.facebook.com/inuv247",
            "https://zalo.me/inuv247",
            "https://www.youtube.com/inuv247"
        ]
    }
</script>

<script>
    // Services Page JavaScript
    class ServicesPage {
        constructor() {
            this.currentGalleryImages = [];
            this.currentGalleryIndex = 0;
            this.reviewsCurrentIndex = 0;
            this.init();
        }

        init() {
            this.initCounters();
            this.initTechTabs();
            this.initQuickCalculator();
            this.initGalleryModal();
            this.initReviewsCarousel();
            this.initModals();
            this.initCountdown();
            this.initScrollEffects();
            this.initFloatingElements();
        }

        // Animated Counters
        initCounters() {
            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.dataset.target);
                        this.animateCounter(counter, target);
                        observer.unobserve(counter);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('[data-target]').forEach(counter => {
                observer.observe(counter);
            });
        }

        animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const duration = 2000;
            const stepTime = duration / 100;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }

                if (target >= 1000) {
                    element.textContent = (current / 1000).toFixed(1) + 'K';
                } else {
                    element.textContent = Math.floor(current);
                }
            }, stepTime);
        }

        // Technology Tabs
        initTechTabs() {
            document.querySelectorAll('.tech-tab').forEach(tab => {
                tab.addEventListener('click', (e) => this.switchTechTab(e));
            });
        }

        switchTechTab(e) {
            const tabId = e.target.dataset.tab;

            // Update active tab
            document.querySelectorAll('.tech-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            e.target.classList.add('active');

            // Update active panel
            document.querySelectorAll('.tech-panel').forEach(panel => {
                panel.classList.remove('active');
            });
            document.getElementById(tabId).classList.add('active');

            // Update tech image
            const images = {
                'machines': 'uv-printer.jpg',
                'materials': 'materials-showcase.jpg',
                'process': 'production-line.jpg',
                'quality': 'quality-control.jpg'
            };

            const techImage = document.getElementById('techImage');
            if (techImage && images[tabId]) {
                techImage.src = techImage.src.replace(/[^/]+\.jpg$/, images[tabId]);
            }
        }

        // Quick Calculator
        initQuickCalculator() {
            const form = document.getElementById('quickQuoteForm');
            if (form) {
                form.addEventListener('submit', (e) => this.calculateQuickQuote(e));
            }
        }

        calculateQuickQuote(e) {
            e.preventDefault();

            const formData = new FormData(e.target);
            const service = formData.get('service');
            const width = parseFloat(formData.get('width')) || 0;
            const height = parseFloat(formData.get('height')) || 0;
            const quantity = parseInt(formData.get('quantity')) || 1;

            if (!service || !width || !height) {
                alert('Vui lòng điền đầy đủ thông tin!');
                return;
            }

            // Price calculation logic
            const prices = {
                'uv-bat': 25000,
                'uv-decal': 15000,
                'bang-hieu': 180000,
                'standee': 120000,
                'backdrop': 35000,
                'in-an': 500
            };

            const basePrice = prices[service] || 0;
            let totalPrice;

            if (service === 'standee') {
                totalPrice = basePrice * quantity;
            } else if (service === 'in-an') {
                totalPrice = basePrice * quantity;
            } else {
                const area = (width * height) / 10000; // Convert to m²
                totalPrice = basePrice * area * quantity;
            }

            // Apply volume discount
            if (quantity >= 10) {
                totalPrice *= 0.9; // 10% discount
            } else if (quantity >= 5) {
                totalPrice *= 0.95; // 5% discount
            }

            // Display result
            document.getElementById('quickPrice').textContent = Math.round(totalPrice).toLocaleString('vi-VN');
            document.getElementById('quickResult').style.display = 'block';
            document.getElementById('quickResult').scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Gallery Modal
        initGalleryModal() {
            document.querySelectorAll('.btn-gallery').forEach(btn => {
                btn.addEventListener('click', (e) => this.openGallery(e));
            });
        }

        openGallery(e) {
            const serviceId = e.target.dataset.service;
            const serviceCard = document.querySelector(`[data-service="${serviceId}"]`);
            const serviceTitle = serviceCard.querySelector('h3').textContent;

            // Get gallery images for this service
            const galleryItems = serviceCard.querySelectorAll('.gallery-item img');
            this.currentGalleryImages = Array.from(galleryItems).map(img => ({
                src: img.src,
                alt: img.alt
            }));

            this.currentGalleryIndex = 0;

            // Update modal
            document.getElementById('galleryTitle').textContent = `Thư viện mẫu - ${serviceTitle}`;
            this.updateGalleryDisplay();

            // Show modal
            document.getElementById('galleryModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        updateGalleryDisplay() {
            if (this.currentGalleryImages.length === 0) return;

            const mainImage = document.getElementById('galleryMainImage');
            const thumbnails = document.getElementById('galleryThumbnails');

            // Update main image
            const currentImage = this.currentGalleryImages[this.currentGalleryIndex];
            mainImage.src = currentImage.src;
            mainImage.alt = currentImage.alt;

            // Update thumbnails
            thumbnails.innerHTML = '';
            this.currentGalleryImages.forEach((image, index) => {
                const thumb = document.createElement('img');
                thumb.src = image.src;
                thumb.alt = image.alt;
                thumb.className = index === this.currentGalleryIndex ? 'active' : '';
                thumb.addEventListener('click', () => {
                    this.currentGalleryIndex = index;
                    this.updateGalleryDisplay();
                });
                thumbnails.appendChild(thumb);
            });
        }

        // Reviews Carousel
        initReviewsCarousel() {
            this.reviewsContainer = document.querySelector('.review-cards');
            this.reviewCards = document.querySelectorAll('.review-card');
            this.reviewsCount = this.reviewCards.length;

            // Auto-play reviews
            setInterval(() => {
                this.slideReviews('next');
            }, 5000);
        }

        slideReviews(direction) {
            if (direction === 'next') {
                this.reviewsCurrentIndex = (this.reviewsCurrentIndex + 1) % this.reviewsCount;
            } else {
                this.reviewsCurrentIndex = (this.reviewsCurrentIndex - 1 + this.reviewsCount) % this.reviewsCount;
            }

            const translateX = -this.reviewsCurrentIndex * 100;
            this.reviewsContainer.style.transform = `translateX(${translateX}%)`;
        }

        // Modal Management
        initModals() {
            document.querySelectorAll('.modal-close').forEach(btn => {
                btn.addEventListener('click', () => this.closeModal());
            });

            document.querySelectorAll('.modal-overlay').forEach(modal => {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) this.closeModal();
                });
            });

            // Quote form submission
            const quoteForm = document.getElementById('detailedQuoteForm');
            if (quoteForm) {
                quoteForm.addEventListener('submit', (e) => this.submitQuoteRequest(e));
            }
        }

        closeModal() {
            document.querySelectorAll('.modal-overlay').forEach(modal => {
                modal.classList.remove('show');
            });
            document.body.style.overflow = 'auto';
        }

        submitQuoteRequest(e) {
            e.preventDefault();

            // Show success message
            alert('Yêu cầu báo giá đã được gửi thành công! Chúng tôi sẽ liên hệ với bạn trong vòng 30 phút.');
            this.closeModal();

            // Reset form
            e.target.reset();
        }

        // Countdown Timer
        initCountdown() {
            const countdown = () => {
                const now = new Date().getTime();
                const tomorrow = new Date();
                tomorrow.setDate(tomorrow.getDate() + 1);
                tomorrow.setHours(0, 0, 0, 0);

                const distance = tomorrow.getTime() - now;

                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                const hoursEl = document.getElementById('hours');
                const minutesEl = document.getElementById('minutes');
                const secondsEl = document.getElementById('seconds');

                if (hoursEl) hoursEl.textContent = hours.toString().padStart(2, '0');
                if (minutesEl) minutesEl.textContent = minutes.toString().padStart(2, '0');
                if (secondsEl) secondsEl.textContent = seconds.toString().padStart(2, '0');

                if (distance < 0) {
                    // Reset countdown
                    countdown();
                }
            };

            countdown();
            setInterval(countdown, 1000);
        }

        // Scroll Effects
        initScrollEffects() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.service-card, .blog-card, .review-card').forEach(el => {
                observer.observe(el);
            });

            // Back to top button
            window.addEventListener('scroll', () => {
                const backToTop = document.getElementById('backToTop');
                if (backToTop) {
                    if (window.pageYOffset > 300) {
                        backToTop.classList.add('show');
                    } else {
                        backToTop.classList.remove('show');
                    }
                }
            });
        }

        // Floating Elements
        initFloatingElements() {
            let isQuickCalcOpen = false;

            window.toggleQuickCalculator = () => {
                const calculator = document.querySelector('.quick-calculator');
                if (calculator) {
                    if (isQuickCalcOpen) {
                        calculator.style.transform = 'translateY(100%)';
                        isQuickCalcOpen = false;
                    } else {
                        calculator.scrollIntoView({
                            behavior: 'smooth'
                        });
                        isQuickCalcOpen = true;
                    }
                }
            };

            window.scrollToTop = () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            };
        }
    }

    // Global Functions
    window.openQuoteModal = function() {
        document.getElementById('quoteModal').classList.add('show');
        document.body.style.overflow = 'hidden';
    };

    window.changeGalleryImage = function(direction) {
        const servicesPage = window.servicesPageInstance;
        if (servicesPage) {
            servicesPage.currentGalleryIndex += direction;
            if (servicesPage.currentGalleryIndex < 0) {
                servicesPage.currentGalleryIndex = servicesPage.currentGalleryImages.length - 1;
            } else if (servicesPage.currentGalleryIndex >= servicesPage.currentGalleryImages.length) {
                servicesPage.currentGalleryIndex = 0;
            }
            servicesPage.updateGalleryDisplay();
        }
    };

    window.slideReviews = function(direction) {
        const servicesPage = window.servicesPageInstance;
        if (servicesPage) {
            servicesPage.slideReviews(direction);
        }
    };

    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        window.servicesPageInstance = new ServicesPage();

        // Initialize particles.js if available
        if (typeof particlesJS !== 'undefined') {
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80
                    },
                    color: {
                        value: '#ffffff'
                    },
                    opacity: {
                        value: 0.3
                    },
                    size: {
                        value: 3
                    },
                    move: {
                        enable: true,
                        speed: 2
                    }
                }
            });
        }
    });
</script>

<?php get_footer(); ?>