@extends('master')

@section('konten')


<div id="container">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact </h1>
                    <p><i class='fa fa-location-arrow' style='font-size:36px'></i>Zaen@Gmail.com</p>
                    <p><i class='fa fa-phone' style='font-size:36px'></i>085812134563</p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/reivaldyz_/"><i class="fa fa-instagram"
                                style="font-size:48px"></i></a>
                        <a href="tel:+62858-1989-5146"><i class="fa fa-whatsapp" style="font-size:48px"></i></a>
                        <a
                            href="https://open.spotify.com/user/313mhwnuymufnztn3xx3rsneh254?si=a9b806aaf8d64c33"><i
                                class="fa fa-spotify" style="font-size:48px"></i></a>
                    </div>
                    <a href="mamage/sertifikat_course_123_3482413_021123092918.pdf" download class="btn btn2">My
                        Sertifikat</a>
                </div>
                <div class="contact-right">
                    <form>
  .                      <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="your email" required>
                        <textarea name="message" rows="6" placeholder="your message"></textarea>
                        <div class="oaa">
                            <button type="submit" class="btn btn2">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection