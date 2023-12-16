<x-master>
    <x-slot:title>
        Contact
    </x-slot:title>

    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Contact Me</h2>

            <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" placeholder="Enter your message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Contact Information</h4>
                <ul class="list-unstyled">
                <li><i class="fa fa-map-marker"></i> D-9/12, Kazi Mokmaparq, Savar, Dhaka, Bangladesh</li>
                <li><i class="fa fa-phone"></i> +880-1984742012</li>
                <li><i class="fa fa-envelope"></i> mrkhandipubijoy@gmail.com</li>
                <li><i class="fa fa-globe"></i> www.myportfolio.com</li>
                </ul>
            </div>
            </div>
        </div>
    </section>


</x-master>