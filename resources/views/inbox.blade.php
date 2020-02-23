@extends('layouts.app')

@section('content')
<div class="gap no-gap">
    <div class="email-box-wrap inner-bg">
        <div class="email-box-nav">
            <div class="email-title">
                <h4>Email Box</h4>
                <span>Default style based on bootstrap</span>
            </div>
            <a href="#" title="">Compose</a>
            <h5>Browse</h5>
            <ul>
                <li><a href="#" title=""><i class="fa fa-envelope"></i> Inbox <span>74</span></a></li>
                <li><a href="3.html" title=""><i class="fa fa-star"></i> Starred</a></li>
                <li><a href="3.html" title=""><i class="fa fa-paper-plane"></i> Sent</a></li>
                <li><a href="3.html" title=""><i class="fa fa-floppy-o"></i> Draft</a></li>
                <li><a href="3.html" title=""><i class="fa fa-times-circle"></i> Trash</a></li>
            </ul>
        </div>
        <div class="email-box-content">
            <div class="email-list">
                <div class="email-list-inf">
                    <div class="slc">
                        <select>
                            <option>Sort by Name</option>
                            <option>Sort by Date</option>
                            <option>Sort by Type</option>
                        </select>
                    </div>
                    <div class="nxt-prv-arrow"> <a href="#" title=""><i class="fa fa-angle-left"></i></a> <a href="#"
                            title=""><i class="fa fa-angle-right"></i></a> </div>
                </div>
                <ul>
                    <li>
                        <div class="email-list-item"> <i class="fa fa-bell"></i>
                            <div class="email-message-inf">
                                <h4>Johan Doe</h4>
                                <i>8:26 am</i> <span>Where are you dude?</span>
                                <p>Lorem Ipsum is simply dummy text of the....</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="email-list-item"> <i class="fa fa-bell"></i>
                            <div class="email-message-inf">
                                <h4>psdfreebies</h4>
                                <i>8:26 am</i> <span>Thanks! Your download...</span>
                                <p>Lorem Ipsum is simply dummy text of the....</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="email-list-item"> <i class="fa fa-bell"></i>
                            <div class="email-message-inf">
                                <h4>Johan Doe</h4>
                                <i>8:26 am</i> <span>Where are you dude?</span>
                                <p>Lorem Ipsum is simply dummy text of the....</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="email-list-item"> <i class="fa fa-bell"></i>
                            <div class="email-message-inf">
                                <h4>Johan Doe</h4>
                                <i>8:26 am</i> <span>Where are you dude?</span>
                                <p>Lorem Ipsum is simply dummy text of the....</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="email-list-item"> <i class="fa fa-bell"></i>
                            <div class="email-message-inf">
                                <h4>Johan Doe</h4>
                                <i>8:26 am</i> <span>Where are you dude?</span>
                                <p>Lorem Ipsum is simply dummy text of the....</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="email-compose">
                <div class="email-compose-info"> <span>Jon Snow to Tyrion Lannister</span> <i>8:26 am</i>
                    <h4>Whare are you dude?</h4>
                    <div class="nxt-prv-arrow"> <a href="#" title=""><i class="fa fa-angle-left"></i></a> <a href="#"
                            title=""><i class="fa fa-angle-right"></i></a> </div>
                </div>
                <form>
                    <textarea>
                                Hi Jon Snow,

                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,

                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                Thanks
                              </textarea>
                </form>
                <div class="email-atrch-inf"> <a href="#" title=""><i class="fa fa-paperclip"></i> Attachments (3)</a>
                    <a href="#" title="">Download</a> </div>

                <div class="email-compos-opt">
                    <a href="#" title=""><i class="fa fa-times"></i></a>
                    <a href="#" title=""><i class="fa fa-reply"></i></a>
                    <a href="#" title=""><i class="fa fa-reply-all"></i></a>
                    <a href="#" title=""><i class="fa fa-share"></i></a>
                    <a href="#" title=""><i class="fa fa-paperclip"></i></a>
                </div>
                <a href="#" title="">Send</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra')

@endsection
