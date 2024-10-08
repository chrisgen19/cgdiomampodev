<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section style="display:none;" class="py-20 px-4 md:px-8 bg-gradient-to-br from-purple-50 to-blue-50">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-gray-900">
                <?php bloginfo('description'); ?>
            </h1>
            <p class="text-xl mb-8 text-gray-700">
                Create an impressive portfolio that highlights your WordPress development expertise
            </p>
            <a href="#"
                class="bg-purple-700 hover:bg-purple-800 text-white font-semibold py-3 px-8 rounded-full transition-colors">
                Get Started
            </a>
        </div>
    </section>

    <section class="bg-gray-900 text-white hero-bg">

        <style>
        .hero-bg {
            position: relative;
            overflow: hidden;
        }

        #animation-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            color: #0f0;
        }
        </style>
        <div id="animation-container"></div>

        <div class="container mx-auto px-4 py-16 md:py-24 lg:py-32 relative hero-container">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in-down">
                    Christian
                </h1>
                <h2 class="text-2xl md:text-3xl text-teal-400 font-semibold mb-4 animate-fade-in-up">
                    Full Stack Developer
                </h2>
                <p class="text-lg md:text-xl text-gray-300 mb-8 animate-fade-in">
                    Crafting elegant solutions to complex problems. Passionate about clean code, user experience, and
                    continuous learning.
                </p>
                <div class="flex justify-center space-x-4 mb-8">
                    <a href="#portfolio"
                        class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-full transition duration-300">
                        View Projects
                    </a>
                    <a href="#contact"
                        class="bg-transparent hover:bg-white hover:text-gray-900 text-white font-semibold py-2 px-4 border border-white hover:border-transparent rounded-full transition duration-300">
                        Contact Me
                    </a>
                </div>
                <div class="flex justify-center space-x-6">
                    <a href="https://github.com/chrisgen19"
                        class="text-gray-400 hover:text-white transition duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://x.com/cgendev" class="text-gray-400 hover:text-white transition duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto">
            <!-- <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Frontend Technologies</h2> -->
            <div class="wrapper">
                <div class="item item1"><img src="/wp-content/themes/cgdiomampo/assets/images/wp.png" /></div>
                <div class="item item2"><img src="/wp-content/themes/cgdiomampo/assets/images/php.png" /></div>
                <div class="item item3"><img src="/wp-content/themes/cgdiomampo/assets/images/py.png" /></div>
                <div class="item item4"><img src="/wp-content/themes/cgdiomampo/assets/images/vue.png" /></div>
                <div class="item item5"><img src="/wp-content/themes/cgdiomampo/assets/images/react.png" /></div>
                <div class="item item6"><img src="/wp-content/themes/cgdiomampo/assets/images/js.png" /></div>
                <div class="item item7"><img src="/wp-content/themes/cgdiomampo/assets/images/html5.png" /></div>
                <div class="item item8"><img src="/wp-content/themes/cgdiomampo/assets/images/css3.png" /></div>
                <div class="item item9"><img src="/wp-content/themes/cgdiomampo/assets/images/ts.png" /></div>
                <div class="item item10"><img src="/wp-content/themes/cgdiomampo/assets/images/angular.png" /></div>
                <div class="item item11"><img src="/wp-content/themes/cgdiomampo/assets/images/jquery.png" /></div>
                <div class="item item12"><img src="/wp-content/themes/cgdiomampo/assets/images/sass.png" /></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 px-4 md:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Web Booster Pack</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Feature items -->
                <?php
                $features = array(
                    array('icon' => '🔑', 'title' => 'Security', 'description' => 'Protecting your site from vulnerabilities and threats with cutting-edge security practices.'),
                    array('icon' => '📱', 'title' => 'Responsive Design', 'description' => 'Creating adaptable layouts that look stunning on any device, ensuring accessibility for all users.'),
                    array('icon' => '🚀', 'title' => 'SEO Optimization', 'description' => 'Maximizing visibility with tailored SEO strategies that drive organic traffic and enhance online presence.'),
                    array('icon' => '⚙️', 'title' => 'Performance Optimization', 'description' => 'Ensuring lightning-fast load times and smooth user experiences with advanced performance tuning.'),
                    array('icon' => '🚀', 'title' => 'DevOps Maestro', 'description' => 'Utilizing cloud platforms like AWS, Azure, and Google Cloud to deploy, manage, and optimize resources for your applications.'),
                    array('icon' => '⚖️', 'title' => 'Compliance with Standards', 'description' => 'Adhering to industry best practices and legal requirements for accessibility and usability.'),
                );

                foreach ($features as $feature) :
                ?>
                <div class="text-center">
                    <div class="text-4xl mb-4 text-purple-700"><?php echo $feature['icon']; ?></div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900"><?php echo $feature['title']; ?></h3>
                    <p class="text-gray-700"><?php echo $feature['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-purple-600 to-indigo-700">
        <div class="container max-w-6xl mx-auto px-6 py-16 flex flex-col md:flex-row items-center">
            <div class="md:w-2/3 lg:pr-12 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-6">
                    About Me
                </h1>
                <p class="text-lg text-purple-100 mb-8">I’m Christian, a dedicated web developer with a passion for
                    crafting seamless and efficient
                    digital experiences. My expertise lies in both front-end and back-end development, using
                    technologies like HTML, CSS, JavaScript, PHP, and WordPress to create user-centric designs and
                    robust applications.</p>
                <p class="text-lg text-purple-100 mb-8">
                    I specialize in optimizing websites for performance and security, ensuring fast, secure, and
                    reliable user experiences. I’m also keen on staying updated with the latest industry trends,
                    particularly in DevOps, where I focus on automation and continuous integration to streamline
                    development processes.</p>

                <p class="text-lg text-purple-100 mb-8">
                    Beyond coding, I’m committed to accessibility and inclusivity, striving to make the web a better
                    place for everyone. Let’s collaborate and bring your ideas to life!</p>

                <a href="#"
                    class="bg-white text-purple-700 font-semibold py-3 px-8 rounded-full hover:bg-purple-100 transition duration-300">
                    Start Exploring
                </a>
            </div>
            <div class="md:w-1/4">
                <img src="/wp-content/themes/cgdiomampo/assets/images/me.jpg" alt="Photo of Me"
                    class="rounded-full shadow-xl object-cover" />
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 6,
        );
        $query = new WP_Query($args);

        // Prepare an array to hold our portfolio items
        $portfolio_items = array();

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $portfolio_items[] = array(
                    'id' => get_the_ID(),
                    'title' => get_the_title(),
                    'description' => get_the_excerpt(),
                    'url' => get_permalink(),
                    'image' => get_the_post_thumbnail_url(get_the_ID(), 'medium')
                );
            endwhile;
            wp_reset_postdata();
        endif;

        // Pass the portfolio items to JavaScript
        wp_localize_script('portfoliojs', 'portfolioData', $portfolio_items);
?>

    <section id="portfolio" class="py-20 px-4 md:px-8 bg-white">
        <div id="portfoliojs"></div>
    </section>

    <!-- Technologies & Skills Section -->
    <section id="skills" class="py-20 px-4 md:px-8 bg-gradient-to-br from-purple-50 to-blue-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Technologies & Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <?php
                    $skills = array(
                    array('name' => 'WordPress', 'description' => 'Expert in theme and plugin development', 'icon' => 'wp.png', 'type' => 'svg'),
                    array('name' => 'PHP', 'description' => 'Advanced backend development', 'icon' => 'code', 'type' => 'lucide'),
                    array('name' => 'JavaScript', 'description' => 'Modern ES6+ and frameworks', 'icon' => 'braces', 'type' => 'lucide'),
                    array('name' => 'HTML5 & CSS3', 'description' => 'Responsive and accessible design', 'icon' => 'layout', 'type' => 'lucide'),
                    array('name' => 'React', 'description' => 'Building interactive UIs', 'icon' => 'react.png', 'type' => 'svg'),
                    array('name' => 'MySQL', 'description' => 'Database design and optimization', 'icon' => 'database', 'type' => 'lucide'),
                    array('name' => 'Git', 'description' => 'Version control and collaboration', 'icon' => 'git-branch', 'type' => 'lucide'),
                    array('name' => 'RESTful APIs', 'description' => 'Design and integration', 'icon' => 'postman.png', 'type' => 'svg'),
                    );

                foreach ($skills as $skill) :
                ?>
                <div class="bg-white rounded-lg p-6 shadow-md text-center">
                    <?php if ($skill['type'] === 'svg'): ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/' . $skill['icon']; ?>"
                        alt="<?php echo $skill['name']; ?>" class=" mx-auto mb-4">
                    <?php else: ?>
                    <i data-lucide="<?php echo $skill['icon']; ?>" class="w-16 h-16 mx-auto mb-4 text-purple-700"></i>
                    <?php endif; ?>
                    <h3 class="text-lg font-semibold text-gray-900"><?php echo $skill['name']; ?></h3>
                    <p class="text-sm text-gray-700 mt-2"><?php echo $skill['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-4 md:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold text-center mb-8 text-gray-900 rainbow-text">
                Why You Need a Seasoned Developer
            </h3>
            <p class="text-lg mb-6 text-gray-700">
                In the fast-paced world of technology, experience is invaluable. A seasoned developer brings a deep
                understanding of the fundamentals of web development, honed through years of practical application. This
                experience translates to the ability to anticipate potential challenges, design more robust and scalable
                solutions, and efficiently troubleshoot issues. A seasoned developer also has a track record of
                successful projects, demonstrating their ability to deliver high-quality results that meet or exceed
                client expectations.
            </p>
            <h3 class="text-2xl font-bold text-center mb-8 text-gray-900 rainbow-text">
                The Importance of Continuous Upskilling
            </h3>
            <p class="text-lg text-gray-700  mb-8">
                Technology never stands still, and neither should a developer. The digital landscape is constantly
                evolving with new tools, frameworks, and best practices emerging regularly. A developer who is committed
                to continuous learning and upskilling is better equipped to leverage the latest technologies, ensuring
                that the solutions they create are not only current but also future-proof. This commitment to growth is
                crucial in delivering cutting-edge solutions that keep clients competitive in their respective
                industries.
            </p>
            <h3 class="text-2xl font-bold text-center mb-8 text-gray-900 rainbow-text">The Ever-Evolving Nature of Web
                Development
            </h3>
            <p class="text-lg text-gray-700">Web development is an ever-changing field. What was considered a best
                practice a few years ago might now
                be outdated. This constant evolution is driven by the emergence of new technologies, the shifting needs
                of users, and the growing importance of aspects like performance, security, and user experience.
                Developers need to stay ahead of these changes to build websites and applications that are not only
                functional but also innovative, engaging, and secure. Keeping up with the latest trends and technologies
                ensures that a developer can offer the most effective and efficient solutions, making them an invaluable
                asset to any project.</p>
        </div>
    </section>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
    lucide.createIcons();
    </script>

    <div id="floating-snippets-container"></div>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-4 md:px-8 bg-gradient-to-br from-purple-50 to-blue-50 animated-gradient">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-white">Get in Touch</h2>

            <style>
            .contact-text ul {
                list-style-type: none;
                padding: 0;
            }

            .contact-text ul li {
                margin-bottom: 1rem;
                display: flex;
                gap: 10px;
                color: #fff;
            }

            .contact-text ul li a {
                color: #fff;
                text-decoration: none;
            }

            .contact-text ul li a:hover {
                color: #f89875
            }
            </style>
            <div class="contact-text">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-mail">
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                        </svg>
                        <a href="mailto:chrisgen19@gmail.com"><strong> Email : </strong> chrisgen19@gmail.com</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-linkedin">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect width="4" height="12" x="2" y="9" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                        <a href="https://www.linkedin.com/in/cgdiomampo/" target="_blank">
                            <strong>LinkedIn : </strong>
                            https://www.linkedin.com/in/cgdiomampo</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-instagram">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                        </svg>
                        <a href="https://www.instagram.com/_gen.codes/" target="_blank">
                            <strong>Instagram : </strong>
                            @_gen.codes</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div id="contact-form-container" class="mx-auto mt-8 p-6 bg-white rounded-lg shadow-md"
                style="display:none;">
                <div id="form-messages" class="mb-4"></div>

                <form id="contact-form" action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="post">
                    <input type="hidden" name="action" value="submit_contact_form">
                    <?php wp_nonce_field('contact_form_submit'); ?>

                    <div class="mb-4 relative">
                        <input type="text" id="name" name="name" required
                            class="block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent peer"
                            placeholder=" ">
                        <label for="name"
                            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                            Name
                        </label>
                    </div>

                    <div class="mb-4 relative">
                        <input type="email" id="email" name="email" required
                            class="block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent peer"
                            placeholder=" ">
                        <label for="email"
                            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                            Email
                        </label>
                    </div>

                    <div class="mb-4 relative">
                        <textarea id="message" name="message" rows="4" required
                            class="block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent peer"
                            placeholder=" "></textarea>
                        <label for="message"
                            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                            Message
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full px-4 py-2 text-white bg-purple-500 rounded-full hover:bg-purple-600 focus:outline-none focus:bg-purple-600 transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>