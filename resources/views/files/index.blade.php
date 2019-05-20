@extends('layouts.master')
@section('title')

@endsection

@section('content')

    <div>
        <div class="border-solid border-b-2 flex items-center bg-white h-24 py-4">
            <div class="container flex items-center max-w-6xl mx-auto px-4 lg:px-20">
                <div class="flex items-center">
                    <a href="#" class="text-lg md:text-2xl font-semibold">Zuzana K</a>
                </div>

                <div class="flex flex-1 justify-end items-center">
                    <nav class="md:flex items-center justify-end text-lg">
                        <a href="#" class="px-2 text-grey-cool-900">My Work</a>
                        <a href="#" class="px-2 text-grey-cool-900">Articles</a>
                        <a href="#" class="px-2 text-grey-cool-900">Contacts</a>
                        <a href="https://www.twitter.com/zk433" target="_blank">
                            <img src="https://d33wubrfki0l68.cloudfront.net/8ce2be4e8116d82cc276b6d1fac003f0849173cc/63d2b/assets/img/twitter.svg"
                                 alt="twitter icon" class="h-8 w-8 max-w-none m-6">
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="flex-auto w-full container max-w-4xl mx-auto py-5 md:py-16 px-6">
            <h1 class="text-lg text-6xl text-gray-200 font-bold">Welcome</h1>
            <div class="md:w-2/3 md:mx-auto">
                <p class="py-3">
                    My name is Zuzana and I am a UK based web designer and developer with background in psychology. My
                    knowledge and love for psychology helps me create beautiful and functional websites built with
                    usability and accessibility in mind.
                </p>
                <p class="py-3 bg-blue-100 text-center">
                    Read the story and watch the video about my journey to becoming a web developer on
                    <a href="https://www.blog.google/outreach-initiatives/grow-with-google/udacity-nanodegree/"
                       class="text-teal-300 font-bold"
                       target="_blank">Google's blog.
                    </a>
                </p>
                <p class="py-3">
                    I offer a range of services, from the initial design to the development of a responsive, accessible
                    and user-friendly website. I also consult on web accessibility issues and I am available for public
                    speaking about responsive and accessible web design, and about the accessibility principles in
                    general.
                </p>
                <p class="py-3">
                    Whether you are looking to redesign and upgrade your current website, create a new one or are
                    looking for a longer-term collaboration, get in touch!
                </p>
                <a href="#"
                   class="uppercase px-7 py-5 flex justify-center mx-auto w-2/5 bg-teal-400 text-sm text-white rounded font-semibold">Contact
                    Me
                </a>
            </div>

            <div class="py-6">
                <img src="https://d33wubrfki0l68.cloudfront.net/027d82f1007fb1dd1b0f2776656bfea1444629b5/751c5/assets/img/stock-img.jpeg"
                     alt="person's hand on silver MacBook">
            </div>

            <div class="mx-auto">
                <h2 class="text-lg text-6xl text-gray-200 font-bold leading-tight block">Testimonials</h2>

                <div class="md:w-2/3 px-3 py-6">
                    <blockquote>
                        Zuzana helped design freeCodeCamp's new user profile and settings pages. She has been a valuable
                        contributor, reliable and responsible, and able to iterate on new design ideas. Working with her
                        has been a pleasure. Zuzana would be a great asset to any team.
                    </blockquote>
                    <cite>
                        Quincy Larson, Teacher and Founder of
                        <a href="https://www.freecodecamp.org" target="_blank">freeCodeCamp.org</a>
                    </cite>
                </div>

                <div class="md:w-2/3 bg-blue-100 px-3 py-6 md:float-right">
                    <blockquote>
                        Zuzana is one of the most determined and self-directed people I know and this comes across in
                        her approach to her work: detail conscious, conscientious, thorough. Her deep understanding of
                        psychological principles makes a real difference - you'll get a full understanding of user
                        experience, psychological aspects of website design and accessibility issues as well as
                        all-round coding and technical skills.
                    </blockquote>
                    <cite>
                        Elisabeth Klaar of
                        <a href="https://oaktreestudio.co.uk" target="_blank">Oak Tree Studio</a>
                    </cite>
                </div>

                <div class="md:w-2/3 px-3 py-6 clearfix">
                    <blockquote>
                        As our agency grows we are constantly searching for reliable partners to help us service the
                        growing needs of our customers. Zuzana has proven to be just that developer. We find her
                        incredibly useful when we need to outsource part of the WordPress website development process,
                        or look to add in custom functionality on a project. Zuzana is professional and good at what she
                        does, but she's also lovely to communicate with. We trust her to complete projects on spec and
                        on time, and we will continue to outsource to her as we grow further.
                    </blockquote>
                    <cite class="py-6">
                        Penni Pickering of
                        <a href="https://www.kabocreative.com" target="_blank">Kabo Creative Limited</a>
                    </cite>
                </div>

                <div class="md:w-2/3 bg-blue-100 px-3 py-6 md:float-right">
                    <blockquote >
                        I have had the pleasure to work with Zuzana on a recent project of ours. Above all, I was most
                        impressed by Zuzana’s attention to detail, and her thorough approach to delivering the work we
                        assigned her. Zuzana was very systematic in organising her workload, and always kept a very
                        detailed list of updates or issues to discuss in our daily stand-ups. Communication with Zuzana
                        was flawless from day one, and I very much look forward to working with her again soon.
                    </blockquote>
                    <cite>
                        Francesco Fabbro of
                        <a href="https://www.studio24.net" target="_blank">Studio 24</a>
                    </cite>
                </div>
            </div>
        </div>

    </div>
@endsection