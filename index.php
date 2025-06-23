<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yago Andrade - Desenvolvedor Full Stack</title>
    <meta name="description" content="Coordenador de TI com 10+ anos de experiência. Especialista em desenvolvimento full stack, Power BI, consultoria tecnológica e transformação digital.">
    
    <!-- SEO Essencial -->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="desenvolvedor full stack, PHP, MySQL, Power BI, Itabuna, Bahia, freelancer, TI, sistemas web, manutenção computadores, formatação Windows, reparo notebook, instalação sistemas">
    <meta name="author" content="Yago Andrade">
    <link rel="canonical" href="https://yagoandrade.com.br">

    <!-- Open Graph (Facebook/WhatsApp) -->
    <meta property="og:title" content="Yago Andrade - Desenvolvedor Full Stack">
    <meta property="og:description" content="Coordenador de TI com 10+ anos de experiência. Especialista em desenvolvimento full stack, Power BI, consultoria tecnológica em Itabuna, Bahia.">
    <meta property="og:image" content="https://yagoandrade.com.br/images/og-image.png">
    <meta property="og:url" content="https://yagoandrade.com.br">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Yago Andrade - Desenvolvedor">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Yago Andrade - Desenvolvedor Full Stack">
    <meta name="twitter:description" content="Especialista em soluções tecnológicas com +10 anos de experiência">
    <meta name="twitter:image" content="https://yagoandrade.com.br/images/og-image.png">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Yago Andrade",
      "jobTitle": "Desenvolvedor Full Stack",
      "description": "Coordenador de TI com 10+ anos de experiência",
      "url": "https://yagoandrade.com.br",
      "email": "yagotiandrade@gmail.com",
      "telephone": "+5573999613608",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Itabuna",
        "addressRegion": "BA",
        "addressCountry": "BR"
      },
      "knowsAbout": ["PHP", "MySQL", "Power BI", "JavaScript", "Desenvolvimento Web"],
      "alumniOf": "UniFTC",
      "workLocation": "Itabuna, Bahia, Brasil",
      "sameAs": [
        "https://instagram.com/euyagoandrade",
        "https://wa.me/5573999613608"
      ]
    }
    </script>

    <!-- Stylesheets e Scripts -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="loader"></div>
    </div>

    <!-- Scroll Progress -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Partículas de fundo -->
    <div class="bg-particles" id="bgParticles"></div>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <!-- Navegação -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#home" class="logo">Yago Andrade</a>
            <ul class="nav-links">
                <li><a href="#home" class="active">Início</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#experience">Experiência</a></li>
                <li><a href="#portfolio">Portfólio</a></li>
                <li><a href="#testimonials">Depoimentos</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
            <div class="mobile-menu-toggle" id="mobileToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Menu Mobile -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#home">🏠 Início</a>
        <a href="#about">👨‍💻 Sobre</a>
        <a href="#services">⚙️ Serviços</a>
        <a href="#experience">💼 Experiência</a>
        <a href="#portfolio">📁 Portfólio</a>
        <a href="#testimonials">💬 Depoimentos</a>
        <a href="#contact">📧 Contato</a>
    </div>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1 id="typewriterText">Yago Andrade</h1>
                <p class="subtitle">Especialista em Soluções Tecnológicas</p>
                <p>Transformando ideias em soluções tecnológicas inovadoras. Com mais de 10 anos de experiência, lidero equipes e projetos que impulsionam o crescimento digital das empresas através de tecnologia de ponta.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">
                        <i class="fas fa-rocket"></i>
                        Vamos Conversar
                    </a>
                    <a href="#portfolio" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        Ver Projetos
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="profile-card">
                    <div class="profile-image">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Yago Andrade</h3>
                    <p>Desenvolvedor Full Stack e Business Analytics</p>
                    <div class="stats">
                        <div class="stat-item">
                            <span class="stat-number" data-count="10">0</span>+
                            <div class="stat-label">Anos de Experiência</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="100">0</span>+
                            <div class="stat-label">Projetos Entregues</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre -->
    <section id="about" class="section about-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Sobre Mim</h2>
                <p class="section-subtitle">Conheça minha trajetória e especialidades na área de tecnologia</p>
            </div>
            <div class="about-content">
                <div class="about-text animate-on-scroll">
                    <h3>Paixão por Tecnologia e Inovação</h3>
                    <p>Graduado em Sistemas de Informação pela UniFTC, construí uma carreira sólida na área de tecnologia, sempre focado em entregar soluções que geram valor real para os negócios e transformam a forma como as empresas operam.</p>
                    <p>Atualmente atuo como Coordenador de TI no Grupo SAF, desenvolvendo estratégias de transformação digital alinhadas aos objetivos do negócio. Meu foco está na excelência operacional, na inovação tecnológica e na geração de valor competitivo para a organização.</p>
                    <p>Minha experiência como freelancer me permite oferecer soluções personalizadas e flexíveis, adaptadas às necessidades específicas de cada cliente, garantindo ROI máximo em investimentos tecnológicos.</p>
                </div>
                <div class="skills-grid animate-on-scroll">
                    <div class="skill-item">
                        <i class="fas fa-code"></i>
                        <span>Desenvolvimento Full Stack</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-chart-bar"></i>
                        <span>Business Intelligence</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-users"></i>
                        <span>Liderança de Equipes</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-project-diagram"></i>
                        <span>Gestão de Projetos</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Segurança da Informação</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-cloud"></i>
                        <span>Cloud Computing</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section id="services" class="section services-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Serviços Prestados</h2>
                <p class="section-subtitle">Soluções tecnológicas completas para impulsionar seu negócio ao próximo nível</p>
            </div>
            <div class="services-grid">
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Desenvolvimento de Sistemas</h3>
                    <p>Criação de sistemas web e aplicações personalizadas utilizando as mais modernas tecnologias. Experiência completa em backend e frontend, sempre priorizando segurança, performance e escalabilidade.</p>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Dashboards com Power BI</h3>
                    <p>Desenvolvimento de dashboards interativos e relatórios analíticos no Power BI. Transformo dados complexos em insights visuais estratégicos para acelerar a tomada de decisão empresarial.</p>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Consultoria em TI</h3>
                    <p>Consultoria estratégica para empresas que buscam evolução tecnológica. Foco em otimização de processos, segurança da informação e liderança em transformação digital.</p>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Banco de Dados</h3>
                    <p>Administração de bancos de dados. Especialista em MySQL e SQL Server, garantindo performance e segurança máxima para suas aplicações.</p>
                </div>
               <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                    <h3>Redes de Computadores</h3>
                    <p>Configuração, administração e otimização de infraestrutura de rede corporativa. Implementação de soluções de conectividade, segurança de rede, monitoramento e troubleshooting para garantir máxima disponibilidade.</p>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Suporte Técnico Especializado</h3>
                    <p>Suporte técnico avançado para sistemas, aplicações e infraestrutura de TI. Diagnóstico rápido de problemas, manutenção preventiva e corretiva, garantindo continuidade operacional dos negócios.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiência -->
    <section id="experience" class="section experience-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Experiência Profissional</h2>
                <p class="section-subtitle">Minha trajetória de crescimento e liderança na área de tecnologia</p>
            </div>
            <div class="timeline">
                <div class="timeline-item animate-on-scroll">
                    <div class="timeline-marker">1</div>
                    <div class="timeline-content">
                        <div class="timeline-date">2020 - Presente</div>
                        <h3 class="timeline-title">Coordenador de TI</h3>
                        <div class="timeline-company">Grupo SAF</div>
                        <p>Liderança estratégica da área de tecnologia, gerenciamento de infraestrutura corporativa e coordenação de projetos de inovação digital. Responsável pela modernização tecnológica que resultou em maior eficiência operacional e redução de custos.</p>
                    </div>
                </div>
                <div class="timeline-item animate-on-scroll">
                    <div class="timeline-marker">2</div>
                    <div class="timeline-content">
                        <div class="timeline-date">2015 - 2020</div>
                        <h3 class="timeline-title">Analista de TI</h3>
                        <div class="timeline-company">Grupo SAF</div>
                        <p>Desenvolvimento e manutenção de sistemas internos, administração de banco de dados, gestão de redes corporativas e suporte técnico especializado. Implementação de soluções que otimizaram processos empresariais.</p>
                    </div>
                </div>
                <div class="timeline-item animate-on-scroll">
                    <div class="timeline-marker">3</div>
                    <div class="timeline-content">
                        <div class="timeline-date">2013 - 2015</div>
                        <h3 class="timeline-title">Auxiliar de TI</h3>
                        <div class="timeline-company">Grupo SAF</div>
                        <p>Início da trajetória profissional, atuando com suporte técnico, manutenção preventiva e corretiva de equipamentos, configuração de redes locais e auxílio no desenvolvimento de pequenos sistemas.</p>
                    </div>
                </div>
                <div class="timeline-item animate-on-scroll">
                    <div class="timeline-marker">4</div>
                    <div class="timeline-content">
                        <div class="timeline-date">Projetos Paralelos</div>
                        <h3 class="timeline-title">Desenvolvedor Freelancer</h3>
                        <div class="timeline-company">Autônomo</div>
                        <p>Desenvolvimento de sistemas web personalizados, criação de dashboards avançados em Power BI, consultoria em tecnologia da informação e soluções digitais para pequenas e médias empresas regionais.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfólio -->
    <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Projetos em Destaque</h2>
                <p class="section-subtitle">Principais projetos que desenvolvi com impacto real nos negócios</p>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item animate-on-scroll">
                    <div class="portfolio-image">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Dashboards Executivos</h3>
                        <p class="portfolio-description">Business Intelligence com dashboards interativos para análise de performance empresarial em tempo real. Aumentou eficiência na tomada de decisões estratégicas.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Power BI</span>
                            <span class="tag">SQL Server</span>
                            <span class="tag">My SQL</span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item animate-on-scroll">
                    <div class="portfolio-image">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Gestão de Manutenções</h3>
                        <p class="portfolio-description">Sistema completo para LsSystem de controle de manutenções preventivas e corretivas, gestão de equipamentos, agendamento de serviços e relatórios operacionais detalhados.</p>
                        <div class="portfolio-tags">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">Bootstrap</span>
                            <span class="tag">JavaScript</span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item animate-on-scroll">
                    <div class="portfolio-image">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Infraestrutura de Rede</h3>
                        <p class="portfolio-description">Implementação completa de infraestrutura de rede corporativa com configuração de switches, roteadores, firewall e sistema de monitoramento para empresa de médio porte.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Cisco</span>
                            <span class="tag">TCP/IP</span>
                            <span class="tag">Firewall</span>
                            <span class="tag">VLAN</span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item animate-on-scroll">
                    <div class="portfolio-image">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Avaliação CHAVE</h3>
                        <p class="portfolio-description">Sistema completo de avaliação de desempenho e competências para recursos humanos, com métricas personalizáveis, relatórios de performance e dashboard gerencial para análise de resultados.</p>
                        <div class="portfolio-tags">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">Bootstrap</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">Power BI</span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item animate-on-scroll">
                    <div class="portfolio-image">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Gestão de Vendas</h3>
                        <p class="portfolio-description">Plataforma para monitoramento de vendas e retenção de clientes com dashboard em tempo real, relatórios de performance, análise de conversão e indicadores de satisfação do cliente.</p>
                        <div class="portfolio-tags">
                            <span class="tag">PHP</span>
                            <span class="tag">Bootstrap</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">Power BI</span>
                            <span class="tag">SQL Server</span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item animate-on-scroll">
                    <div class="portfolio-image">
                        <i class="fas fa-server"></i>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Infraestrutura TI</h3>
                        <p class="portfolio-description">Projeto completo de atualização de servidores, implementação de backup automatizado, virtualização de sistemas e migração para ambiente híbrido na nuvem.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Windows Server</span>
                            <span class="tag">VMware</span>
                            <span class="tag">Backup</span>
                            <span class="tag">Active Directory</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tecnologias -->
    <section class="section tech-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Tecnologias & Ferramentas</h2>
                <p class="section-subtitle">Stack tecnológico que domino para entregar soluções eficazes e robustas</p>
            </div>
            <div class="tech-grid">
                <div class="tech-category animate-on-scroll">
                    <h3><i class="fas fa-desktop"></i> Frontend</h3>
                    <div class="tech-items">
                        <span class="tech-item">HTML5</span>
                        <span class="tech-item">CSS3</span>
                        <span class="tech-item">JavaScript</span>
                        <span class="tech-item">Bootstrap</span>
                        <span class="tech-item">jQuery</span>
                        <span class="tech-item">AJAX</span>
                        <span class="tech-item">Responsive Design</span>
                    </div>
                </div>
                <div class="tech-category animate-on-scroll">
                    <h3><i class="fas fa-server"></i> Backend</h3>
                    <div class="tech-items">
                        <span class="tech-item">PHP</span>
                    </div>
                </div>
                <div class="tech-category animate-on-scroll">
                    <h3><i class="fas fa-database"></i> Banco de Dados</h3>
                    <div class="tech-items">
                        <span class="tech-item">MySQL</span>
                        <span class="tech-item">SQL Server</span>
                        <span class="tech-item">PostgreSQL</span>
                    </div>
                </div>
                <div class="tech-category animate-on-scroll">
                    <h3><i class="fas fa-chart-bar"></i> Business Intelligence</h3>
                    <div class="tech-items">
                        <span class="tech-item">Power BI</span>
                    </div>
                </div>
                <div class="tech-category animate-on-scroll">
                    <h3><i class="fas fa-network-wired"></i> Redes & Infraestrutura</h3>
                    <div class="tech-items">
                        <span class="tech-item">TCP/IP</span>
                        <span class="tech-item">Cisco</span>
                        <span class="tech-item">Switches</span>
                        <span class="tech-item">Roteadores</span>
                        <span class="tech-item">Firewall</span>
                        <span class="tech-item">VLAN</span>
                        <span class="tech-item">Wi-Fi</span>
                        <span class="tech-item">VPN</span>
                    </div>
                </div>
                <div class="tech-category animate-on-scroll">
                    <h3><i class="fas fa-tools"></i> Ferramentas + utilizadas</h3>
                    <div class="tech-items">
                        <span class="tech-item">VS Code</span>
                        <span class="tech-item">Git</span>
                        <span class="tech-item">Composer</span>
                        <span class="tech-item">WampServer</span>
                        <span class="tech-item">phpMyAdmin</span>
                        <span class="tech-item">DataGrip</span>
                        <span class="tech-item">Insomnia</span>
                        <span class="tech-item">FileZilla</span>
                    </div>
                </div>
            </div>
    </section>

    <!-- Depoimentos -->
    <section id="testimonials" class="section testimonials-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">O que dizem sobre meu trabalho</h2>
                <p class="section-subtitle">Feedback de clientes e colegas que já trabalharam comigo</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card animate-on-scroll">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <p class="testimonial-text">"Yago é um profissional dedicado e competente. Sempre resolve nossos problemas de TI com agilidade e está sempre disposto a ajudar. Sua experiência com Power BI nos ajudou muito na criação dos relatórios gerenciais."</p>
                    <div class="testimonial-author">Lucas Almeida</div>
                    <!--<div class="testimonial-role">Proprietária - LUGI LTDA</div>!-->
                </div>
                <div class="testimonial-card animate-on-scroll">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <p class="testimonial-text">"Contratei o Yago para desenvolver um sistema de controle para minha empresa. Trabalho de qualidade, entregue no prazo e com suporte pós-venda. Recomendo!"</p>
                    <div class="testimonial-author">Rafael Costa</div>
                    <!--<div class="testimonial-role">Proprietária - LUGI LTDA</div>!-->
                </div>
                <div class="testimonial-card animate-on-scroll">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <p class="testimonial-text">"Excelente profissional! Resolveu problemas na nossa rede. Muito conhecimento técnico e sempre explica tudo de forma clara. Trabalho bem feito."</p>
                    <div class="testimonial-author">Thiago Martins</div>
                    <!--<div class="testimonial-role">Proprietária - LUGI LTDA</div>!-->
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Vamos Trabalhar Juntos?</h2>
                <p class="section-subtitle">Entre em contato para discutir como posso ajudar seu próximo projeto a alcançar o sucesso</p>
            </div>
            <div class="contact-content">
                <div class="contact-info animate-on-scroll">
                    <h3>Informações de Contato</h3>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>yagotiandrade@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+55 (73) 99961-3608</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Itabuna, Bahia - Brasil</span>
                    </div>
                    <div class="availability">
                        <h4>Disponibilidade Imediata</h4>
                        <div class="contact-item">
                            <i class="fas fa-calendar-check"></i>
                            <span>Aberto para novos projetos freelance</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-briefcase"></i>
                            <span>Consultoria empresarial especializada</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-rocket"></i>
                            <span>Projetos de transformação digital</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <span>Resposta em até 24 horas</span>
                        </div>
                    </div>
                </div>
                <div class="contact-form animate-on-scroll">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nome Completo *</label>
                            <input type="text" id="name" name="name" required placeholder="Seu nome completo">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" id="email" name="email" required placeholder="seu@email.com">
                        </div>
                       <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" id="phone" name="phone" placeholder="(00) 00000-0000">
                        </div>
                        <div class="form-group">
                            <label for="service">Tipo de Serviço *</label>
                            <select id="service" name="service" required>
                                <option value="">Selecione um serviço</option>
                                <option value="desenvolvimento">🚀 Desenvolvimento de Sistemas</option>
                                <option value="powerbi">📊 Dashboard Power BI</option>
                                <option value="consultoria">💡 Consultoria em TI</option>
                                <option value="redes">🌐 Redes de Computadores</option>
                                <option value="suporte">🛠️ Suporte Técnico</option>
                                <option value="database">🗄️ Banco de Dados</option>
                                <option value="outro">🔧 Outro serviço</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Descrição do Projeto *</label>
                            <textarea id="message" name="message" placeholder="Descreva seu projeto, objetivos e desafios. Quanto mais detalhes, melhor posso ajudá-lo!" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem; font-size: 1.1rem; padding: 1.2rem;">
                            <i class="fas fa-paper-plane"></i>
                            <span id="buttonText">Enviar Proposta</span>
                        </button>
                        <p style="font-size: 0.9rem; color: var(--text-muted); text-align: center; margin-top: 1rem;">
                            * Campos obrigatórios | Resposta garantida em até 24 horas
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="social-links">
                <a href="https://instagram.com/euyagoandrade" class="social-link" title="Instagram" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/5573999613608?text=Olá%20Yago!%20Visitei%20seu%20portfólio%20e%20gostaria%20de%20discutir%20uma%20oportunidade%20de%20projeto.%20Podemos%20conversar?" class="social-link" title="WhatsApp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="mailto:yagotiandrade@gmail.com" class="social-link" title="E-mail">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
            <p class="footer-text">© 2025 Yago Andrade. Todos os direitos reservados.</p>
            <p class="footer-text">
                <i class="fas fa-rocket" style="color: var(--primary-color);"></i> 
                Transformando ideias em soluções tecnológicas desde 2013.
            </p>
            <p class="footer-text">Desenvolvido com 💙 por Yago Andrade.</p>
        </div>
    </footer>

    <!-- Botão WhatsApp Flutuante -->
    <a href="https://wa.me/5573999613608?text=Olá%20Yago!%20Visitei%20seu%20portfólio%20e%20gostaria%20de%20discutir%20uma%20oportunidade%20de%20projeto.%20Podemos%20conversar?" 
       class="whatsapp-float" 
       target="_blank" 
       title="Conversar no WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
      // ==================== MÁSCARA DE TELEFONE ====================

        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, ''); // Remove tudo que não é número
            
            // Limita a 11 dígitos (DDD + 9 dígitos)
            if (value.length > 11) {
                value = value.substring(0, 11);
            }
            
            // Aplica a máscara conforme vai digitando
            if (value.length >= 1) {
                if (value.length <= 2) {
                    // Apenas DDD: (11
                    value = value.replace(/(\d{1,2})/, '($1');
                } else if (value.length <= 6) {
                    // DDD + primeiros dígitos: (11) 9999
                    value = value.replace(/(\d{2})(\d{1,4})/, '($1) $2');
                } else if (value.length <= 10) {
                    // Telefone fixo: (11) 9999-9999
                    value = value.replace(/(\d{2})(\d{4})(\d{1,4})/, '($1) $2-$3');
                } else {
                    // Celular: (11) 99999-9999
                    value = value.replace(/(\d{2})(\d{5})(\d{1,4})/, '($1) $2-$3');
                }
            }
            
            e.target.value = value;
        });
        
        // Impede que sejam colados caracteres não numéricos
        document.getElementById('phone').addEventListener('paste', function(e) {
            e.preventDefault();
            let paste = (e.clipboardData || window.clipboardData).getData('text');
            let numbersOnly = paste.replace(/\D/g, '');
            
            if (numbersOnly.length > 11) {
                numbersOnly = numbersOnly.substring(0, 11);
            }
            
            // Simula a digitação para aplicar a máscara
            this.value = '';
            this.value = numbersOnly;
            this.dispatchEvent(new Event('input'));
        });
        
        // Remove caracteres não permitidos ao pressionar teclas
        document.getElementById('phone').addEventListener('keypress', function(e) {
            // Permite apenas números, backspace, delete, tab, escape, enter
            if ([8, 9, 27, 13, 46].indexOf(e.keyCode) !== -1 ||
                // Permite Ctrl+A, Ctrl+C, Ctrl+V, Ctrl+X
                (e.keyCode === 65 && e.ctrlKey === true) ||
                (e.keyCode === 67 && e.ctrlKey === true) ||
                (e.keyCode === 86 && e.ctrlKey === true) ||
                (e.keyCode === 88 && e.ctrlKey === true)) {
                return;
            }
            
            // Garante que é um número
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
            
            // Limita a 15 caracteres (máximo com máscara: (11) 99999-9999)
            if (this.value.length >= 15) {
                e.preventDefault();
            }
        });

        // ==================== INICIALIZAÇÃO ====================
        
        // Page Loader
        window.addEventListener('load', () => {
            const loader = document.getElementById('pageLoader');
            setTimeout(() => {
                loader.classList.add('hidden');
            }, 1500);
        });

        // Criar partículas de fundo
        function createParticles() {
            const particlesContainer = document.getElementById('bgParticles');
            const numberOfParticles = window.innerWidth < 768 ? 30 : 50;

            for (let i = 0; i < numberOfParticles; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDuration = (Math.random() * 25 + 15) + 's';
                particle.style.animationDelay = Math.random() * 25 + 's';
                particle.style.width = (Math.random() * 3 + 2) + 'px';
                particle.style.height = particle.style.width;
                particlesContainer.appendChild(particle);
            }
        }

        createParticles();

        // ==================== NAVEGAÇÃO ====================

        // Scroll Progress Bar
        window.addEventListener('scroll', () => {
            const scrollTop = document.documentElement.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrollPercent = (scrollTop / scrollHeight) * 100;
            document.getElementById('scrollProgress').style.width = scrollPercent + '%';
        });

        // Menu Mobile CORRIGIDO
        const mobileToggle = document.getElementById('mobileToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileOverlay = document.getElementById('mobileOverlay');

        if (mobileToggle && mobileMenu && mobileOverlay) {
            // Função para abrir menu
            function openMobileMenu() {
                mobileToggle.classList.add('active');
                mobileMenu.classList.add('active');
                mobileOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            // Função para fechar menu
            function closeMobileMenu() {
                mobileToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                mobileOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }

            // Toggle do menu
            mobileToggle.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                if (mobileToggle.classList.contains('active')) {
                    closeMobileMenu();
                } else {
                    openMobileMenu();
                }
            });

            // Fechar menu ao clicar nos links
            document.querySelectorAll('.mobile-menu a').forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });

            // Fechar menu ao clicar no overlay
            mobileOverlay.addEventListener('click', closeMobileMenu);

            // Fechar menu com ESC
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    closeMobileMenu();
                }
            });
        }

        // Navegação suave
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Navegação ativa
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-links a');
            
            let currentSection = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 150;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    currentSection = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSection}`) {
                    link.classList.add('active');
                }
            });
        });

        // ==================== ANIMAÇÕES ====================

        // Animação de entrada dos elementos
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Efeito de typewriter no título
        function typeWriter() {
            const text = 'Yago Andrade';
            const element = document.getElementById('typewriterText');
            element.textContent = '';
            
            let i = 0;
            const timer = setInterval(() => {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                } else {
                    clearInterval(timer);
                }
            }, 150);
        }

        setTimeout(typeWriter, 2000);

        // Contador animado para estatísticas
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number[data-count]');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                const duration = 2500;
                const increment = target / (duration / 16);
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                }, 16);
            });
        }

        // Iniciar contadores quando a seção hero for visível
        const heroObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    heroObserver.unobserve(entry.target);
                }
            });
        });

        heroObserver.observe(document.querySelector('.hero-section'));

        // ==================== FORMULÁRIO DE CONTATO ====================

        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const button = this.querySelector('button[type="submit"]');
            const buttonText = document.getElementById('buttonText');
            const originalText = buttonText.textContent;

            // Validação básica
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !service || !message) {
                // SweetAlert2 para validação
                Swal.fire({
                    icon: 'warning',
                    title: 'Campos Obrigatórios',
                    text: 'Por favor, preencha todos os campos obrigatórios.',
                    confirmButtonText: 'Entendi',
                    confirmButtonColor: '#ff6b35',
                    background: '#1f1f1f',
                    color: '#ffffff',
                    customClass: {
                        popup: 'dark-popup'
                    }
                });
                return;
            }
        
            // Preparar dados
            const formData = {
                name: name,
                email: email,
                phone: document.getElementById('phone').value.trim(),
                service: service,
                message: message
            };
        
            // Animação de envio
            button.style.transform = 'scale(0.98)';
            buttonText.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
            button.disabled = true;

            // Enviar via fetch
            fetch('contact.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    buttonText.innerHTML = '<i class="fas fa-check"></i> Enviado com Sucesso!';
                    button.style.background = 'var(--gradient-success)';

                    // Efeito de sucesso
                    button.style.transform = 'scale(1.05)';
                    setTimeout(() => {
                        button.style.transform = 'scale(1)';
                    }, 200);

                    // SweetAlert2 de sucesso
                    Swal.fire({
                        icon: 'success',
                        title: 'Mensagem Enviada!',
                        html: `
                            <div style="text-align: left; margin-top: 20px;">
                                <p style="margin-bottom: 15px;">✅ <strong>Obrigado pelo contato, ${name}!</strong></p>
                                <p style="margin-bottom: 10px;">🚀 Sua solicitação foi enviada com sucesso</p>
                                <p style="margin-bottom: 10px;">📧 Responderemos no email: <strong>${email}</strong></p>
                                <p style="margin-bottom: 10px;">⏱️ Tempo de resposta: <strong>até 24 horas</strong></p>
                                <p style="margin-top: 20px; padding: 15px; background: rgba(255, 107, 53, 0.1); border-radius: 8px; border-left: 4px solid #ff6b35;">
                                    💡 <strong>Dica:</strong> Verifique sua caixa de spam se não receber nossa resposta
                                </p>
                            </div>
                        `,
                        confirmButtonText: 'Perfeito!',
                        confirmButtonColor: '#ff6b35',
                        background: '#1f1f1f',
                        color: '#ffffff',
                        width: '600px',
                        customClass: {
                            popup: 'dark-popup'
                        },
                        timer: 20000,
                        timerProgressBar: true,
                        showClass: {
                            popup: 'animate__animated animate__zoomIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__zoomOut'
                        }
                    }).then(() => {
                        // Resetar formulário após fechar o alert
                        buttonText.textContent = originalText;
                        button.disabled = false;
                        button.style.background = '';
                        button.style.transform = '';
                        this.reset();
                    });

                } else {
                    throw new Error(data.message);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                buttonText.innerHTML = '<i class="fas fa-exclamation-triangle"></i> Erro ao enviar';
                button.style.background = 'var(--warning-color)';

                // SweetAlert2 de erro
                Swal.fire({
                    icon: 'error',
                    title: 'Ops! Algo deu errado',
                    html: `
                        <div style="text-align: left; margin-top: 20px;">
                            <p style="margin-bottom: 15px;">❌ <strong>Não foi possível enviar sua mensagem</strong></p>
                            <p style="margin-bottom: 10px;">🔄 Por favor, tente novamente em alguns instantes</p>
                            <p style="margin-bottom: 20px;">📱 Ou entre em contato diretamente:</p>
                            <div style="padding: 15px; background: rgba(220, 53, 69, 0.1); border-radius: 8px; border-left: 4px solid #dc3545;">
                                <p style="margin-bottom: 8px;">📧 <strong>Email:</strong> yagotiandrade@gmail.com</p>
                                <p style="margin-bottom: 0;">📱 <strong>WhatsApp:</strong> (73) 99961-3608</p>
                            </div>
                        </div>
                    `,
                    confirmButtonText: 'Tentar Novamente',
                    confirmButtonColor: '#dc3545',
                    background: '#1f1f1f',
                    color: '#ffffff',
                    width: '600px',
                    customClass: {
                        popup: 'dark-popup'
                    }
                });

                setTimeout(() => {
                    buttonText.textContent = originalText;
                    button.disabled = false;
                    button.style.background = '';
                    button.style.transform = '';
                }, 3000);
            });
        });

        // ==================== EFEITOS VISUAIS ====================

        // Efeitos de hover interativos
        document.querySelectorAll('.service-card, .portfolio-item, .tech-category, .testimonial-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = '';
            });
        });

       // ==================== PERFORMANCE E OTIMIZAÇÕES ====================

        // Lazy loading de imagens (se houver)
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        observer.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Throttle function para otimizar eventos de scroll
        function throttle(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        // ==================== EASTER EGGS E EXTRAS ====================

        // Konami Code Easter Egg
        let konamiCode = [];
        const konami = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65]; // ↑↑↓↓←→←→BA

        document.addEventListener('keydown', (e) => {
            konamiCode.push(e.keyCode);
            if (konamiCode.length > konami.length) {
                konamiCode.shift();
            }
            
            if (konamiCode.toString() === konami.toString()) {
                // Easter egg ativado!
                document.body.style.animation = 'rainbow 3s infinite';
                
                // Criar confetti
                createConfetti();
                
                setTimeout(() => {
                    document.body.style.animation = '';
                }, 5000);
            }
        });

        // Função para criar confetti
        function createConfetti() {
            for (let i = 0; i < 50; i++) {
                const confetti = document.createElement('div');
                confetti.style.cssText = `
                    position: fixed;
                    width: 10px;
                    height: 10px;
                    background: ${['#ff6b35', '#667eea', '#764ba2', '#f7931e'][Math.floor(Math.random() * 4)]};
                    left: ${Math.random() * 100}vw;
                    top: -10px;
                    z-index: 10000;
                    pointer-events: none;
                    animation: confetti-fall 3s linear forwards;
                `;
                document.body.appendChild(confetti);
                
                setTimeout(() => {
                    confetti.remove();
                }, 3000);
            }
        }

        // Adicionar CSS para confetti
        const confettiStyle = document.createElement('style');
        confettiStyle.textContent = `
            @keyframes confetti-fall {
                0% { transform: translateY(-10px) rotate(0deg); opacity: 1; }
                100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
            }
            @keyframes rainbow {
                0% { filter: hue-rotate(0deg); }
                100% { filter: hue-rotate(360deg); }
            }
        `;
        document.head.appendChild(confettiStyle);

        // ==================== ANALYTICS E TRACKING ====================

        // Simular Google Analytics (substitua pela sua GA ID real)
        function trackEvent(action, category, label) {
            if (typeof gtag !== 'undefined') {
                gtag('event', action, {
                    event_category: category,
                    event_label: label
                });
            }
            console.log(`📊 Event tracked: ${category} - ${action} - ${label}`);
        }

        // Track cliques em botões importantes
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const text = this.textContent.trim();
                trackEvent('click', 'button', text);
            });
        });

        // Track seções visualizadas
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const sectionName = entry.target.id || 'unknown';
                    trackEvent('view', 'section', sectionName);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('section[id]').forEach(section => {
            sectionObserver.observe(section);
        });

        // ==================== FEEDBACK VISUAL ====================

        // Tooltip para elementos importantes
        function createTooltip(element, text) {
            const tooltip = document.createElement('div');
            tooltip.textContent = text;
            tooltip.style.cssText = `
                position: absolute;
                background: var(--card-bg);
                color: var(--text-light);
                padding: 0.5rem 1rem;
                border-radius: 8px;
                font-size: 0.8rem;
                pointer-events: none;
                z-index: 10000;
                opacity: 0;
                transition: opacity 0.3s ease;
                border: 1px solid var(--primary-color);
                box-shadow: var(--shadow-small);
            `;
            
            element.addEventListener('mouseenter', (e) => {
                document.body.appendChild(tooltip);
                const rect = element.getBoundingClientRect();
                tooltip.style.left = rect.left + (rect.width / 2) - (tooltip.offsetWidth / 2) + 'px';
                tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';
                tooltip.style.opacity = '1';
            });
            
            element.addEventListener('mouseleave', () => {
                tooltip.style.opacity = '0';
                setTimeout(() => {
                    if (tooltip.parentNode) {
                        tooltip.parentNode.removeChild(tooltip);
                    }
                }, 300);
            });
        }

        // Adicionar tooltips aos ícones sociais
        document.querySelectorAll('.social-link').forEach(link => {
            const title = link.getAttribute('title');
            if (title) {
                createTooltip(link, title);
            }
        });

        // ==================== ACESSIBILIDADE ====================

        // Melhorar navegação por teclado
        document.addEventListener('keydown', (e) => {
            // Esc fecha menu mobile
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                closeMobileMenu();
            }
            
            // Tab navigation melhorada
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-navigation');
            }
        });

        document.addEventListener('mousedown', () => {
            document.body.classList.remove('keyboard-navigation');
        });

        // Adicionar estilos para navegação por teclado
        const a11yStyle = document.createElement('style');
        a11yStyle.textContent = `
            .keyboard-navigation *:focus {
                outline: 2px solid var(--primary-color) !important;
                outline-offset: 2px !important;
            }
        `;
        document.head.appendChild(a11yStyle);

        // ==================== DETECÇÃO DE RECURSOS ====================

        // Detectar se é dispositivo touch
        const isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
        if (isTouch) {
            document.body.classList.add('touch-device');
            
            // Remover efeitos hover em dispositivos touch
            const touchStyle = document.createElement('style');
            touchStyle.textContent = `
                .touch-device .service-card:hover,
                .touch-device .portfolio-item:hover,
                .touch-device .tech-category:hover {
                    transform: none !important;
                }
            `;
            document.head.appendChild(touchStyle);
        }

        // Detectar modo escuro do sistema
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            console.log('🌙 Dark mode detected');
        }

        // Detectar preferência de movimento reduzido
        if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            const reduceMotionStyle = document.createElement('style');
            reduceMotionStyle.textContent = `
                *, *::before, *::after {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                }
            `;
            document.head.appendChild(reduceMotionStyle);
        }

        // ==================== CONSOLE BRANDING ====================

        console.log(`
        🚀 Portfólio Yago Andrade v2.0
        ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
        
        👋 Olá! Obrigado por visitar meu portfólio!
        
        🛠️ Stack Técnico deste site:
        • HTML5 & CSS3 com variáveis CSS
        • JavaScript ES6+ vanilla (sem frameworks!)
        • Animações CSS personalizadas
        • Intersection Observer API
        • Design responsivo mobile-first
        • Progressive Web App ready
        
        🎯 Características especiais:
        • ⚡ Performance otimizada
        • 🎨 Efeitos visuais premium
        • 📱 100% responsivo
        • ♿ Acessibilidade aprimorada
        • 🔒 Código limpo e seguro
        
        💼 Interessado em trabalhar comigo?
        📧 E-mail: yago.silva@email.com
        💼 LinkedIn: linkedin.com/in/yagosilva
        📱 WhatsApp: +55 (73) 99999-9999
        
        🎮 Easter Egg: Tente o Konami Code! ↑↑↓↓←→←→BA
        
        ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
        Desenvolvido com 💙, ☕ e muito código em Itabuna, Bahia
        `);

        // ==================== MODO DESENVOLVIMENTO ====================

        // Detectar se está em desenvolvimento
        const isDev = location.hostname === 'localhost' || location.hostname === '127.0.0.1';
        
        if (isDev) {
            console.log('🔧 Modo desenvolvimento ativo');
            
            // Adicionar informações de debug
            window.portfolioDebug = {
                version: '2.0.0',
                buildDate: new Date().toISOString(),
                features: [
                    'Mobile Menu Fixed',
                    'Particle System',
                    'Scroll Progress',
                    'Intersection Observer',
                    'Form Validation',
                    'Analytics Ready',
                    'PWA Ready',
                    'SEO Optimized'
                ]
            };
            
            console.table(window.portfolioDebug);
        }

        // ==================== PWA SUPPORT ====================

        // Service Worker registration (se você tiver um)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('✅ SW registered: ', registration);
                    })
                    .catch(registrationError => {
                        console.log('❌ SW registration failed: ', registrationError);
                    });
            });
        }

        // ==================== FINALIZAÇÃO ====================

        // Marcar que o JS foi carregado completamente
        document.body.classList.add('js-loaded');
        
        // Event para quando tudo estiver pronto
        const portfolioReady = new CustomEvent('portfolioReady', {
            detail: {
                timestamp: Date.now(),
                version: '2.0.0'
            }
        });
        
        document.dispatchEvent(portfolioReady);
        
        console.log('✅ Portfólio carregado com sucesso!');

    </script>
</body>
</html>