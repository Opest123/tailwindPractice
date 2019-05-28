@extends('layouts.master')
@section('title')
    Sitebot
@endsection

@section('content')
    <div>
        <header class="shadow-md w-full bg-white h-16 py-2 fixed z-40">
            <div class="site-header container-lg">
                <div class="flex flex-1 items-center">
                    <img src="/static/img/logo.png" alt="" class="mx-1">
                    <a href="/" class="flex items-center">
                        <span class="text-2xl text-green-500 flex items-center">
                            sitebot
                            <span>.ai</span>
                        </span>
                        <span class="mt-2 ml-1 inline text-base">beta</span>
                    </a>
                </div>

                <nav class="flex items-center site-header-nav">
                    <ul>
                        <a href="#">Demo</a>

                        <a href="#">Blog</a>

                        <a href="#">Pricing</a>

                        <a href="#">Login</a>

                        <button class="btn-price mr-0">
                            <a href="#">Sign up</a>
                        </button>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="cover">
            <div class="container-lg py-16 md:py-16">
                <div class="flex flex-col md:flex-row -mx-2">
                    <div class="flex-1 px-4">
                        <h1 class="text-white font-bold text-4xl mb-md-2">Make sure your website works</h1>
                        <p class="text-white text-lg mb-lg-2">
                            Sitebot learns how your website works by analyzing users' clicks.
                            <br/>
                            It then automatically tests that your site keeps working as it should.
                        </p>
                        <div class="flex flex-row my-6">
                            <a href="https://demo.sitebot.ai/dashboard" class="flex-1 btn-white w-8">Try the demo</a>
                            <a href="#" class="flex-1 btn-orange w-8">Get started for free</a>
                        </div>
                    </div>
                    <div class="flex items-center justify-center px-lg-4 py-lg-4 lg:ml-2">
                        <p class="text-xl-center text-green-500">
                            Sitebot tests ran:
                            <br/>
                            <span class="font-bold text-4xl text-white">103423</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="content">
            <div class="container-lg py-16 text-center">
                <h2 class="font-medium text-black text-center lg:mb-8">How Sitebot Works</h2>

                <div class="flex flex-col md:flex-row -mx-2">
                    <div class="flex-1 m-2">
                        <div class="flex justify-center mb-4"><img src="images/file.jpg" class="w-16 h-16"></div>
                        <h3>1. Add a script to your website</h3>
                        <p class="text-center">The Sitebot JavaScript snippet anonymously analyzes visitors' clicks
                            on your site.</p>
                    </div>

                    <div class="flex-1 m-2">
                        <div class="flex justify-center mb-4"><img src="images/test1.jpg" class="w-16 h-16"></div>
                        <h3>2. Sitebot recognizes patterns</h3>
                        <p class="text-center">Test patterns are automatically created for the most important tasks
                            on your website.</p>
                    </div>

                    <div class="flex-1 m-2">
                        <div class="flex justify-center mb-4"><img src="images/text2.jpg" class="w-16 h-16"></div>
                        <h3>3. Automatic website testing</h3>
                        <p class="text-center">Sitebot continuously tests your website and alerts with an email when
                            something goes wrong!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="text-center text-lg container-content content-text py-16 text-grey-cool-500">
            <p>
                Sitebot is so easy to use that you don't need any technical or testing knowledge.
                Unlike other testing tools, there's no need to code or record any tests yourself.
            </p>
        </div>
    </div>

    <div class="content">
        <div class="container-lg py-16">
            <div>
                <h2 class="font-medium text-black lg:mb-4 text-center">Pricing</h2>

                <div class="flex md:flex-row justify-between">
                    <div class="flex flex-col md:flex-1 bg-white items-center mx-4 rounded border shadow">
                        <h3 class="font-semibold capitalize">free</h3>
                        <div class="text-grey-cool-500">
                            $ <span class="text-4xl font-bold text-green-500">0</span>
                        </div>
                        <div class="text-lg text-center text-grey-cool-500 py-4">
                            <p>Nightly test</p>
                            <p>3 test patterns</p>
                            <p>5 API calls/day</p>
                        </div>
                        <div class="py-4">
                            <button type="submit" class="btn-price text-lg text-white font-bold">Start trial
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-1 bg-white items-center mx-4 rounded border shadow">
                        <h3 class="font-semibold capitalize">free</h3>
                        <div class="text-grey-cool-500">
                            $ <span class="text-4xl font-bold text-green-500">19</span> / mo
                            <p class="text-center text-lg">per website</p>
                        </div>
                        <div class="text-lg capitalize text-center text-grey-cool-500 py-4">
                            <p>60 min monitoring interval</p>
                            <p>10 test patterns</p>
                            <p>10 API calls/day</p>
                            <p>Priority support</p>
                        </div>
                        <div class="py-4">
                            <button type="submit" class="btn-price text-lg text-white font-bold">Start trial
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-1 bg-white items-center mx-4 rounded border shadow">
                        <h3 class="font-semibold capitalize">free</h3>
                        <div class="text-grey-cool-500">
                            $ <span class="text-4xl font-bold text-green-500">99</span> / mo
                            <p class="text-center text-lg">per website</p>
                        </div>
                        <div class="text-lg capitalize text-center text-grey-cool-500 py-4">
                            <p>5-60 min monitoring interval</p>
                            <p>Unlimited test patterns</p>
                            <p>Unlimited API calls</p>
                            <p>Priority support</p>
                        </div>
                        <div class="py-4">
                            <button type="submit" class="btn-price text-lg text-white font-bold text-center">Start
                                trial
                            </button>
                        </div>
                    </div>
                </div>
                <h3 class="font-medium text-lg text-black lg:mb-4 text-center mt-8">14-day free trial after testing
                    has been set
                    up. No credit card required.
                </h3>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container-content py-16">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="flex items-center justify-center p-4">
                    <img class="max-w-md rounded-full mr-4" src="images/th.jpg" alt="face">
                </div>
                <div class="flex-2 p-2 text-lg self-center text-grey-cool-500">
                    <p class="leading-none mb-4">I'm Hannu Jaakkola, the founder of sitebot.ai. As a web developer,
                        I
                        need to make sure the websites I'm developing always work.</p>
                    <p>I created Sitebot to help me and others build & maintain websites with more
                        confidence.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container-lg py-16">
            <div class="flex flex-1 md:flex-row -mx-4">
                <div class="hidden md:flex md:flex-1 items-center justify-center px-4">
                    <img class="lg:w-48" src="images/error.jpg" alt="error">
                </div>
                <div class="flex-2 my-4 px-4 text-lg text-grey-cool-500">
                    <h2 class="font-semibold text-black mb-4">Downtime and errors happen</h2>
                    <p>Broken websites cost money. Don't make your users notify you of bugs!</p>
                    <p>Websites need to be tested periodically for errors. Sitebot saves your time by automating the
                        testing process.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container-lg py-16">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="flex-2 p-4 text-grey-cool-500">
                    <h2 class="font-semibold text-black"> Discover and fix issues faster </h2>
                    <p>Sitebot tests your website with a real browser to catch every issue. It emails you
                        screenshots and error messages to help you discover and fix bugs, regressions and other
                        issues as soon as they appear.</p>
                    <p>It also tracks test running times and detects slowly loading pages.</p>
                    <h4 class="mt-8 font-semibold text-black">Sitebot detects:</h4>
                    <div class="flex md:flex-row">
                        <div class="flex-1">
                            <ul class="list-square list-inside">
                                <li>HTML errors</li>
                                <li>JavaScript errors</li>
                                <li>Files that fail to load</li>
                            </ul>
                        </div>
                        <div class="flex-1">
                            <ul class="list-square list-inside">
                                <li>HTML errors</li>
                                <li>JavaScript errors</li>
                                <li>Files that fail to load</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex md:flex-1 items-center justify-center p-4">
                    <div class="example-emails">
                        <div class="example-emails">
                            <span class="pl-2">Error on page: /login</span>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                        <div class="example-emails example-emails2">
                            <span class="pl-2">Not Found: image.jpg (404)</span>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                        <div class="example-emails example-emails3">
                            <span class="pl-2">Test completed in 32.47s</span>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-black text-center text-lg mt-16">
                Sitebot runs tests using headless Google Chrome, the same browser that
                <a href="https://gs.statcounter.com/browser-market-share" title="Browser Market Share Worldwide"
                   target="_blank" class="text-green-600 underline">62% of your customers use!</a>
            </h3>
        </div>
    </div>

    <div class="bg-white">
        <div class="container-content py-16">
            <h2 class="pt-0">Questions &amp; Answers</h2>
            <h4 class="mt-4">Do I need to run the tests?</h4>
            <p>You don't need to run anything yourself, Sitebot provides everything for you automatically.</p>
            <h4 class="mt-4">How does Sitebot test?</h4>
            <p>Sitebot runs tests using a headless browser that's technically identical to a browser that your real
                users use.</p>
            <h4 class="mt-4">What if my website requires logging in?</h4>
            <p>Sitebot knows how to log in to most sites. You can provide test user credentials and Sitebot
                automatically logs in to your website.</p>
            <h4 class="mt-4">Can I test my staging/testing environment?</h4>
            <p>You can run tests on multiple versions of the same website with webhooks or the API.</p>
            <h4 class="mt-4">Can Sitebot be integrated with other services?</h4>
            <p>Sitebot can run tests by using webhooks, for example from GitHub, Gitlab or BitBucket. You can also
                call the API programmatically.</p>
            <h4 class="mt-4">Is the Sitebot JavaScript snippet safe?</h4>
            <p>
                The snippet only collects clicks anonymously. No data will be shared with third parties. The script
                is tiny; you can view
                <a href="https://t.sitebot.ai/script.js" target="_blank" class="text-green-600">the source code
                    here</a>
            </p>
            <h4 class="mt-4">Why do I need Sitebot if I already have my own tests?</h4>
            <p>Depending on how your tests are set up, they may not catch every error. Your tests might require
                maintaining when you make changes to your website.</p>
            <h4 class="mt-4">Why is only Google Chrome supported?</h4>
            <p>In the beta phase, Chrome is the only browser to run tests with because it's the most popular one.
                Running tests with Firefox and Internet Explorer are on the development roadmap.</p>
        </div>
    </div>
    <footer class="text-center bg-black py-16">
        <div class="flex flex-col items-center">
            <button class="btn-footer">Get started for free</button>
        </div>
        <div class="text-center text-green-600 pt-16 text-base">
            <a href="mailto:support@sitebot.ai">support@sitebot.ai</a>
        </div>
        <div class="container-lg py-16">
            <div class="md:flex md:flex-row -mx-2">
                <div class="flex justify-center flex-col flex-1 m-4 text-lg">
                    <div class="mb-4 self-center">
                        <img src="images/sitebot128.png" alt="Logo">
                    </div>
                    <a class="text-white">
                        © sitebot
                        <span class="text-green-600">.ai</span>
                        2018-2019
                    </a>
                </div>
                <div class="flex justify-center flex-col flex-1 m-4 text-lg">
                    <div class="mb-4">
                        <a class="text-white hover:underline" href="/privacy">Privacy Policy</a>
                    </div>
                    <div>
                        <a class="text-white hover:underline" href="/terms">Terms of Service</a>
                    </div>
                </div>
                <div class="flex justify-center flex-col flex-1 m-4 text-lg">
                    <div class="mb-4">
                        <a class="text-white hover:underline"
                           href="/blog">Blog
                        </a>
                    </div>
                    <div class="mb-4">
                        <a class="text-white hover:underline" href="/contact">Contact
                        </a>
                    </div>
                    <div class="mb-4">
                        <a class="text-white hover:underline"
                           href="https://twitter.com/sitebotai">Twitter
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    </div>
@endsection
