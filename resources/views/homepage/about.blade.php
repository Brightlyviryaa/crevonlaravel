@extends('homepage.base')

@section('title')
    About Us
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
    <!-- Box pertama -->
    <div class="py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 flex flex-col items-center justify-between lg:flex-row">
                <div data-aos="fade-up" class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-10">
                    <h4 class="mb-2 text-2xl font-bold">About Us</h4>
                    <h3 class="mb-4 text-4xl font-bold">PT Crevon Indonesia</h3>
                    <p class="text-lg text-gray-700">Established in 2007, PT. Crevon Indonesia has been a prominent player in
                        the automotive industry for over a decade. Our dedication to providing high-quality products has
                        earned us a reputation as a trusted name in both daily use and hobbyist automotive circles.</p>
                </div>
                <div class="lg:w-1/2">
                    <img data-aos="zoom-in-left" src="{{ asset('aboutAsset/logo2.png') }}" alt="Company Logo"
                        draggable="false" class="mx-auto lg:w-3/4">
                </div>
            </div>

            <!-- Box kedua -->
            <div data-aos="fade-right"
                class="mb-12 flex flex-col items-center justify-between bg-gray-200 lg:flex-row-reverse">
                <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-10">
                    <h3 class="mb-4 text-4xl font-bold">Pioneering Automotive Excellence</h3>
                    <p class="text-lg text-gray-700">At PT. Crevon Indonesia, we specialize in offering a wide range of
                        motor spare parts to meet the diverse needs of our valued customers. Our extensive inventory
                        includes essential components such as Gear Sets, Vanbelts, Roller Housings, Brake Pads, and
                        Batteries (AKI). Each product is meticulously selected to ensure reliability, durability, and peak
                        performance.</p>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('aboutAsset/img1.jpg') }}" alt="Image 1" draggable="false"
                        class="mx-auto lg:mx-0 lg:w-3/4">
                </div>
            </div>

            <!-- Box ketiga -->
            <div data-aos="fade-left" class="mb-12 flex flex-col items-center justify-between lg:flex-row">
                <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-10">
                    <h3 class="mb-4 text-4xl font-bold">A Legacy of Innovation</h3>
                    <p class="text-lg text-gray-700">Innovation lies at the heart of our company's ethos. We believe in
                        continuously pushing the boundaries of what's possible in automotive spare parts. Our dedicated team
                        of experts is tirelessly working to develop new and cutting-edge products, all with the ultimate aim
                        of enhancing the user experience.</p>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('aboutAsset/img2.jpg') }}" alt="Image 2" draggable="false" class="mx-auto lg:w-3/4">
                </div>
            </div>

            <!-- Box keempat -->
            <div data-aos="fade-right"
                class="mb-12 flex flex-col items-center justify-between bg-gray-200 lg:flex-row-reverse">
                <div class="order-2 mb-6 lg:order-1 lg:mb-0 lg:w-1/2 lg:pr-10">
                    <h3 class="mb-4 text-4xl font-bold">Our Vision</h3>
                    <p class="text-lg text-gray-700">At PT. Crevon Indonesia, we envision a future where every motorist can
                        rely on our products for superior performance, safety, and longevity. Through our unwavering
                        commitment to quality, we aim to set new standards in the automotive spare parts industry.</p>
                </div>
                <div class="order-1 lg:order-2 lg:w-1/2">
                    <img src="{{ asset('aboutAsset/img3.jpg') }}" alt="Image 3" draggable="false"
                        class="mx-auto lg:mx-0 lg:w-3/4">
                </div>
            </div>

            <!-- Box kelima -->
            <div data-aos="fade-left" class="mb-12 flex flex-col items-center justify-between lg:flex-row">
                <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-10">
                    <h3 class="mb-4 text-4xl font-bold">Our Mission</h3>
                    <p class="text-lg text-gray-700">1. Innovation for Excellence: Continuously research, develop, and
                        introduce cutting-edge spare parts that redefine industry standards and enhance the driving
                        experience.
                        <br /> <br />
                        2. Unwavering Quality Assurance: Implement rigorous quality control measures at every stage of
                        production to guarantee the reliability and longevity of our products.
                        <br /> <br />
                        3. Customer-Centric Approach: Anticipate and fulfill the diverse needs of our customers, providing
                        personalized solutions and exceptional service that exceed expectations.
                        <br /> <br />
                        4. Sustainable Practices: Embrace eco-friendly and sustainable manufacturing processes, contributing
                        to a cleaner, greener automotive industry.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('aboutAsset/img4.jpg') }}" alt="Image 4" draggable="false" class="mx-auto lg:w-3/4">
                </div>
            </div>

            <!-- Box keenam -->
            <div data-aos="fade-right"
                class="mb-12 flex flex-col items-center justify-between bg-gray-200 lg:flex-row-reverse">
                <div class="order-2 mb-6 lg:order-1 lg:mb-0 lg:w-1/2 lg:pr-10">
                    <h3 class="mb-4 text-4xl font-bold">Our Mission</h3>
                    <p class="text-lg text-gray-700">5. Empowering Communities: Foster a culture of skill development and
                        empowerment within our workforce, nurturing a team of dedicated professionals committed to
                        excellence.
                        <br /> <br />
                        6. Global Reach, Local Impact: Expand our reach internationally while remaining deeply rooted in the
                        communities we serve, contributing to economic growth and development.
                        <br /> <br />
                        7. Ethical Conduct: Uphold the highest standards of integrity, transparency, and ethical conduct in
                        all our interactions with stakeholders, partners, and customers.
                        <br /> <br />
                        8. Continuous Learning and Improvement: Foster a culture of lifelong learning and adaptability,
                        staying at the forefront of industry trends and technological advancements.
                    </p>
                </div>
                <div class="order-1 lg:order-2 lg:w-1/2">
                    <img src="{{ asset('aboutAsset/img5.jpg') }}" alt="Image 5" draggable="false"
                        class="mx-auto lg:mx-0 lg:w-3/4">
                </div>
            </div>

            <!-- Box ketujuh -->
            <div data-aos="fade-left" class="mb-12 flex flex-col items-center justify-between lg:flex-row">
                <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-10">
                    <h3 class="mb-4 text-4xl font-bold">Commitment to Excellence</h3>
                    <p class="text-lg text-gray-700">We take pride in our commitment to excellence. Every product that bears
                        the PT. Crevon Indonesia name is a testament to our rigorous quality assurance processes. We strive
                        to not only meet but exceed the expectations of our customers, ensuring their complete satisfaction.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('aboutAsset/img6.jpg') }}" alt="Image 6" draggable="false" class="mx-auto lg:w-3/4">
                </div>
            </div>
        </div>
    </div>
    <!-- Box kedelapan -->
    <div data-aos="flip-down" class="relative flex flex-col bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('aboutAsset/img7.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex flex-col items-center justify-center px-12 py-12 text-center">
            <h3 class="mb-4 text-4xl font-bold text-white">Get in Touch</h3>
            <p class="text-lg text-white">At PT. Crevon Indonesia, we envision a future where every motorist can rely on our
                products for superior performance, safety, and longevity. Through our unwavering commitment to quality, we
                aim to set new standards in the automotive spare parts industry.</p>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        aos.init();
    </script>
@endsection
{{-- {{ asset('aboutAsset/img7.jpg') }} --}}
