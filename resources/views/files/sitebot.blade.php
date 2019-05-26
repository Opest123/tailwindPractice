@extends('layouts.master')
@section('title')
    Sitebot
@endsection

@section('content')
    <div>
        <header class="flex items-center h-16 py-2 sticky">
            <div class="site-header container">
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

                        <button class="site-btn">
                            <a href="#">Sign up</a>
                        </button>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="cover">
            <div class="container site-header py-16 md:py-16">
                <div class="flex flex-col md:flex-row -mx-2">
                    <div class="flex-1 px-4">
                        <h1 class="text-white font-bold text-4xl mb-md-2">Make sure your website works</h1>
                        <p class="text-white text-lg mb-lg-2">
                            Sitebot learns how your website works by analyzing users' clicks.
                            <br/>
                            It then automatically tests that your site keeps working as it should.
                        </p>
                        <div class="flex flex-row my-6">
                            <a href="https://demo.sitebot.ai/dashboard" class="flex-1 btn-white">Try the demo</a>
                            <a href="#" class="flex-1 btn-orange">Get started for free</a>
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
            <div class="container site-header py-16">
                <div>
                    <div>
                        <h2 class="font-medium text-black lg:mb-2 text-center">How Sitebot Works</h2>
                    </div>

                    <div class="flex justify-between">
                        <div class="flex flex-col flex-1 items-center m-2">
                            <h3>1. Add a script to your website</h3>
                            <p class="text-center">The Sitebot JavaScript snippet anonymously analyzes visitors' clicks
                                on your site.</p>
                        </div>

                        <div class="flex flex-1 flex-col items-center m-2">
                            <h3>2. Sitebot recognizes patterns</h3>
                            <p class="text-center">Test patterns are automatically created for the most important tasks
                                on your website.</p>
                        </div>

                        <div class="flex flex-col flex-1 items-center m-2">
                            <h3>3. Automatic website testing</h3>
                            <p class="text-center">Sitebot continuously tests your website and alerts with an email when
                                something goes wrong!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div class="text-center text-lg container content-text py-16">
                <p>
                    Sitebot is so easy to use that you don't need any technical or testing knowledge.
                    Unlike other testing tools, there's no need to code or record any tests yourself.
                </p>
            </div>
        </div>

        <div class="content">
            <div class="container site-header py-16">
                <div>
                    <div>
                        <h2>Pricing</h2>
                    </div>

                    <div class="flex justify-between">
                        <div class="flex flex-col flex-1 bg-white items-center">
                            <div>
                                <h3>free</h3>
                            </div>
                            <div>$ <span class="text-4xl font-bold text-green-500">0</span></div>
                            <p>Nightly test</p>
                            <p>3 test patterns</p>
                            <p>5 API calls/day</p>
                            <div>
                                <button type="submit" class="site-btn text-lg text-white font-bold">Start trial</button>
                            </div>
                        </div>

                        <div class="flex flex-col flex-1 bg-white items-center mx-2">
                            <div>
                                <h3>free</h3>
                            </div>
                            <div>$ <span class="text-4xl font-bold text-green-500">0</span></div>
                            <p>Nightly test</p>
                            <p>3 test patterns</p>
                            <p>5 API calls/day</p>
                            <div>
                                <button type="submit" class="site-btn text-lg text-white font-bold">Start trial</button>
                            </div>
                        </div>

                        <div class="flex flex-col flex-1 bg-white items-center">
                            <div>
                                <h3>free</h3>
                            </div>
                            <div>$ <span class="text-4xl font-bold text-green-500">0</span></div>
                            <p>Nightly test</p>
                            <p>3 test patterns</p>
                            <p>5 API calls/day</p>
                            <div>
                                <button type="submit" class="site-btn text-lg text-white font-bold text-center">Start trial</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>

        </footer>
    </div>
@endsection