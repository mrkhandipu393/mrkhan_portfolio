<x-master>
    <x-slot:title>
        Homepage
    </x-slot:title>

    <section id="home" class="py-5">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <h1>Hi, I'm M R Khan Dipu</h1>
                <h2>A Web Developer</h2>
                <p class="mt-4">Hi, I'm a web developer based in [Dhaka, Bangladesh]. I specialize in creating responsive, user-friendly websites using HTML, CSS, and JavaScript. </p>
                <a href="{{route('about')}}" class="btn btn-primary mt-4">Learn More</a>
            </div>
            <div class="col-md-6">
                <img src="assets/images/my image.jpg" alt="Profile Picture" class="img-fluid rounded-circle" width="200" height="250">
            </div>
            </div>
        </div>
    </section>

</x-master>