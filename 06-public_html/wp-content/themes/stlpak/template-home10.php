<?php
/**
 * Template Name: Home 10 - Modern StlPak Design
 *
 * Modern packaging solutions homepage template
 * Based on React/Three.js design reference
 *
 * @package StlPak
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="hero-background">
        <div class="hero-canvas"></div>
        <div class="hero-overlay"></div>
    </div>

    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    ISO9001 Certified Manufacturer
                </div>

                <h1 class="hero-title">
                    Shaping the <br/>
                    <span class="brand-text">
                        Future
                        <svg class="title-underline" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="3" fill="none" />
                        </svg>
                    </span>
                    of Food Packaging
                </h1>

                <p class="hero-description">
                    8 years of manufacturing excellence serving global brands like Costco.
                    We blend aesthetics with food safety to deliver crystal-clear packaging solutions.
                </p>

                <div class="hero-actions">
                    <a href="#products" class="btn btn-primary">
                        View Products
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#contact" class="btn btn-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polygon points="10 8 16 12 10 16 10 8"/>
                        </svg>
                        Request Samples
                    </a>
                </div>

                <div class="hero-trust">
                    <div class="partner-logos">
                        <div class="logo-item">
                            <div class="logo-placeholder"></div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-placeholder"></div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-placeholder"></div>
                        </div>
                        <div class="logo-item">
                            <div class="logo-placeholder"></div>
                        </div>
                        <div class="logo-more">+100</div>
                    </div>
                    <p class="trust-text">Trusted by 100+ Global Partners</p>
                </div>
            </div>

            <!-- 右侧为3D画布预留空间 -->
            <div class="hero-visual"></div>
        </div>
    </div>

    <div class="hero-blend"></div>
</section>

<!-- Value Bento Section -->
<section class="value-bento-section" id="values">
    <div class="container">
        <div class="value-bento-header">
            <div class="value-bento-title">
                <h2>Factory Direct <br/>
                    <span class="brand-highlight">Value Proposition</span>
                </h2>
                <p>Premium manufacturing capabilities with competitive advantages for global partners. No middlemen, just excellence.</p>
            </div>
            <div class="become-partner-link">
                <a href="#contact">Become a Partner</a>
            </div>
        </div>

        <div class="value-bento-grid">
            <!-- Large Card: Years -->
            <div class="bento-card large-card dark">
                <div class="bento-content">
                    <div class="bento-value">08</div>
                    <div class="bento-label">Established</div>
                    <h3>Years of Excellence</h3>
                    <p>Since 2017, we have been dedicated to manufacturing excellence, serving global brands with consistency and uncompromised quality standards.</p>
                </div>
            </div>

            <!-- Stat 1 -->
            <div class="bento-card">
                <div class="bento-content">
                    <div class="bento-value">1B+</div>
                    <div class="bento-label">Annual Capacity</div>
                    <p>Units produced annually</p>
                </div>
            </div>

            <!-- Stat 2 -->
            <div class="bento-card">
                <div class="bento-content">
                    <div class="bento-value">06</div>
                    <div class="bento-label">Advanced Lines</div>
                    <p>State-of-the-art production</p>
                </div>
            </div>

            <!-- Feature: Factory Direct -->
            <div class="bento-card">
                <div class="bento-content">
                    <div class="bento-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 3h18v18H3zM12 8v8m-4-4h8"/>
                        </svg>
                    </div>
                    <h3>Factory Direct</h3>
                    <p>No middlemen. Competitive pricing with volume discounts.</p>
                </div>
            </div>

            <!-- Feature: Partners -->
            <div class="bento-card">
                <div class="bento-content">
                    <div class="bento-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="8.5" cy="7" r="4"/>
                            <path d="M20 8v6M23 11h-6"/>
                        </svg>
                    </div>
                    <h3>Global Partners</h3>
                    <p>Serving Costco, Sam's Club, and 100+ others.</p>
                </div>
            </div>

            <!-- Feature: Quality -->
            <div class="bento-card wide">
                <div class="bento-content">
                    <div class="bento-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3>Quality Certified</h3>
                    <p>ISO9001/14001, FDA, HACCP. Strict quality control ensuring international standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Showcase Section -->
<section class="product-showcase-section" id="products">
    <div class="container">
        <div class="product-showcase-header">
            <div class="product-showcase-title">
                <span class="collection-label">Our Collection</span>
                <h2>Precision Engineered <br/> Packaging Series</h2>
            </div>
            <div class="view-all-btn">
                <button class="btn btn-outline">View All Catalog</button>
            </div>
        </div>

        <!-- Horizontal Scroll Area -->
        <div class="product-showcase-scroll">
            <div class="product-card-horizontal">
                <div class="product-image-horizontal">
                    <img src="https://picsum.photos/id/75/800/1000" alt="Egg Packaging" />
                </div>
                <h3>Egg Packaging</h3>
                <p>6, 12, 18, 30 Piece Varieties</p>
            </div>

            <div class="product-card-horizontal">
                <div class="product-image-horizontal">
                    <img src="https://picsum.photos/id/292/800/1000" alt="Bakery Series" />
                </div>
                <h3>Bakery Series</h3>
                <p>Cake, Cookie & Pastry Boxes</p>
            </div>

            <div class="product-card-horizontal">
                <div class="product-image-horizontal">
                    <img src="https://picsum.photos/id/102/800/1000" alt="Fruit Containers" />
                </div>
                <h3>Fruit Containers</h3>
                <p>Vented Berry Packaging</p>
            </div>

            <div class="product-card-horizontal">
                <div class="product-image-horizontal">
                    <img src="https://picsum.photos/id/225/800/1000" alt="Fresh Salad Bowls" />
                </div>
                <h3>Fresh Salad Bowls</h3>
                <p>High Transparency PET</p>
            </div>

            <div class="product-card-horizontal">
                <div class="product-image-horizontal">
                    <img src="https://picsum.photos/id/429/800/1000" alt="Takeout Solutions" />
                </div>
                <h3>Takeout Solutions</h3>
                <p>Eco-friendly & Durable</p>
            </div>

            <div class="product-card-horizontal">
                <div class="product-image-horizontal">
                    <img src="https://picsum.photos/id/250/800/1000" alt="Custom Design" />
                </div>
                <h3>Custom Design</h3>
                <p>Tailored to your Brand</p>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section class="success-stories-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Success Stories</h2>
            <p class="section-subtitle">Trusted by Industry Leaders</p>
        </div>

        <div class="success-stories-grid">
            <div class="success-story-card">
                <div class="success-logo">
                    <span>Costco</span>
                </div>
                <div class="success-content">
                    <h3>Costco Partnership</h3>
                    <p>Supplying high-quality egg packaging solutions for Costco's private label, with annual volume exceeding 50 million units.</p>
                </div>
            </div>

            <div class="success-story-card">
                <div class="success-logo">
                    <span>Sam's Club</span>
                </div>
                <div class="success-content">
                    <h3>Sam's Club Collaboration</h3>
                    <p>Custom bakery packaging solutions that enhanced product visibility and reduced transportation costs by 15%.</p>
                </div>
            </div>

            <div class="success-story-card">
                <div class="success-logo">
                    <span>Major Retailer</span>
                </div>
                <div class="success-content">
                    <h3>Retail Chain Success</h3>
                    <p>Complete packaging redesign for a major grocery chain, resulting in 30% increase in customer satisfaction ratings.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Resources Section -->
<section class="resources-section" id="resources">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Resources</h2>
            <p class="section-subtitle">Download Technical Specifications</p>
        </div>

        <div class="resources-grid">
            <div class="resource-card">
                <div class="resource-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                    </svg>
                </div>
                <h3>Product Catalog</h3>
                <p>Complete product specifications and technical details</p>
                <a href="#" class="resource-link">Download PDF</a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z"/>
                        <path d="M2 17L12 22L22 17"/>
                        <path d="M2 12L12 17L22 12"/>
                    </svg>
                </div>
                <h3>Certifications</h3>
                <p>ISO9001, FDA, HACCP compliance documentation</p>
                <a href="#" class="resource-link">View Certificates</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="services-grid">
            <div class="service-item">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                    </svg>
                </div>
                <h3>Global Manufacturing</h3>
                <p>1 Billion units annual capacity with 20,000m³ warehousing.</p>
            </div>

            <div class="service-item">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 11L12 14L22 4"/>
                        <path d="M21 12V19C21 20.1 20.1 21 19 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H16"/>
                    </svg>
                </div>
                <h3>Intl. Certifications</h3>
                <p>FDA, CE, HACCP, ISO9001 compliant production.</p>
            </div>

            <div class="service-item">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 19L19 12L22 15L15 22L12 19Z"/>
                        <path d="M18 13L6.5 1.5L3.5 4.5L15 16L18 13Z"/>
                    </svg>
                </div>
                <h3>Custom Solutions</h3>
                <p>Free professional design, sampling & logo printing.</p>
            </div>

            <div class="service-item">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="1" y="3" width="15" height="13"/>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                        <circle cx="5.5" cy="18.5" r="2.5"/>
                        <circle cx="18.5" cy="18.5" r="2.5"/>
                    </svg>
                </div>
                <h3>Global Logistics</h3>
                <p>DDP/CIF terms, 7-20 days worldwide delivery.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="contact-content">
            <div class="contact-text">
                <h2 class="contact-title">Get in Touch</h2>
                <p class="contact-subtitle">Request free samples and expert consultation</p>

                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Email Us</h4>
                            <p>sales@stlpak.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Call Us</h4>
                            <p>+86 400-123-4567</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form class="inquiry-form">
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="company" placeholder="Company Name">
                    </div>

                    <div class="form-group">
                        <select name="product" required>
                            <option value="">Select Product Interest</option>
                            <option value="egg-packaging">Egg Packaging</option>
                            <option value="bakery-containers">Bakery Containers</option>
                            <option value="fruit-packaging">Fruit Packaging</option>
                            <option value="sustainable-series">Sustainable Series</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <textarea name="message" placeholder="Project Requirements" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-full">
                        Submit Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>