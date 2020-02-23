@extends('layouts.app')
@php($user = $user ?? auth()->user())
@php($title = $user->name)
@section('content')

  <div class="profile">
    <div class="row merged">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="profile-bg"> <img src="images/resources/profile-bg.jpg" alt="">
          <div class="admin-meta"> <img src="images/resources/profile-avatar.jpg" alt="">
            <h5>Mario Flores</h5>
            <span>developer</span> </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ul class="follow-btns">
              <li class="active"><a class="follow" href="#" title="">follow</a></li>
              <li><a class="message" href="#" title="">message</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-sm-6">
            <ul class="profile-socials">
              <li><a class="facebook" href="#" title=""><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#" title=""><i class="fa fa-twitter"></i></a></li>
              <li><a class="vk" href="#" title=""><i class="fa fa-vk"></i></a></li>
              <li><a class="tumblr" href="#" title=""><i class="fa fa-tumblr"></i></a></li>
            </ul>
          </div>
          <div class="col-md-12">
            <div class="sub-area">
              <ul>
                <li><a href="#" title=""><i class="fa fa-briefcase"></i>Over View </a></li>
                <li><a href="#" title=""><i class="fa fa-gear"></i>Account Settings </a></li>
                <li><a href="#" title=""><i class="fa fa-adjust"></i>Over View </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="about">
            <div class="row">
              <div class="col-md-6">
                <div class="about-info">
                  <h4>About Mario:</h4>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut consectet uer adipiscing elit laoreet dolore magna.</p>
                </div>
              </div>
              <div class="col-md-6">
                <ul class="vlaue-show">
                  <li> <span>37</span> <a href="#" title="">projects</a> </li>
                  <li> <span>59</span> <a href="#" title="">Tasks</a> </li>
                  <li> <span>60</span> <a href="#" title="">Uploads</a> </li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="widget">
        <div class="widget-title">
          <h4>your activity</h4>
          <ul class="widget-controls">
              <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
              <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
              <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
          </ul>
        </div>
        <div class="widget-peding">
          <ul class="activity-meta">
            <li>
              <div class="activity-ico"> <img src="images/icon-6.png" alt=""> <span>4515 <i>total sales</i></span> </div>
              <div class="spark">
                <div class="sparkline11"></div>
              </div>
            </li>
            <li>
              <div class="activity-ico"> <img src="images/icon-7.png" alt=""> <span>2089<i>new sales</i></span> </div>
              <div class="spark">
                <div class="sparkline12"></div>
              </div>
            </li>
          </ul>
          <table class="member-activity table table-responsive">
            <thead>
              <tr>
                <th>member</th>
                <th>earnings</th>
                <th>case</th>
                <th>closed</th>
                <th>rate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i><img src="images/resources/active-member1.jpg" alt=""></i> <span>tom</span></td>
                <td>$18</td>
                <td>65</td>
                <td>28</td>
                <td>80%</td>
              </tr>
              <tr>
                <td><i><img src="images/resources/active-member2.jpg" alt=""></i> <span>rifn</span></td>
                <td>$198</td>
                <td>99</td>
                <td>68</td>
                <td>90%</td>
              </tr>
              <tr>
                <td><i><img src="images/resources/active-member3.jpg" alt=""></i> <span>tom</span></td>
                <td>$18</td>
                <td>65</td>
                <td>28</td>
                <td>80%</td>
              </tr>
              <tr>
                <td><i><img src="images/resources/active-member4.jpg" alt=""></i> <span>rifn</span></td>
                <td>$198</td>
                <td>99</td>
                <td>68</td>
                <td>90%</td>
              </tr>
              <tr>
                <td><i><img src="images/resources/active-member3.jpg" alt=""></i> <span>Daniel</span></td>
                <td>$198</td>
                <td>99</td>
                <td>68</td>
                <td>90%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- user list -->
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="widget">
        <div class="widget-title">
          <h4>Feeds</h4>
          <ul class="widget-controls">
              <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
              <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
              <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
          </ul>
        </div>
        <div class="widget-peding">
          <ul class="feeds">
            <li class="green"> <span class="date">25 Sec Ago</span>
              <h5>Nulla Vel Metus Scelerue Commodo</h5>
            </li>
            <li class="green"> <span class="date">05 Sec Ago</span>
              <h5>Completed Layout Examples</h5>
            </li>
            <li class="blue"> <span class="date">55 Sec Ago</span>
              <h5>New Updated Has Been Installed </h5>
            </li>
            <li class="yellow"> <span class="date">25 Min Ago</span>
              <h5>4 Friends Request Accepted</h5>
            </li>
            <li class="red"> <span class="date">2 Hour Ago</span>
              <h5>Daisy Has Joined Your Team</h5>
            </li>
            <li class="green"> <span class="date">25 Sec Ago</span>
              <h5>Nulla Vel Metus Scelerue Commodo</h5>
            </li>
            <li class="green"> <span class="date">05 Sec Ago</span>
              <h5>Completed Layout Examples</h5>
            </li>
            <li class="blue"> <span class="date">55 Sec Ago</span>
              <h5>New Updated Has Been Installed </h5>
            </li>
          </ul>
        </div>
      </div>
      <!-- user list -->
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="widget">
        <div class="widget-title">
          <h4>customer support</h4>
          <ul class="widget-controls">
              <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
              <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
              <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
          </ul>
        </div>
        <div class="widget-peding">
          <ul class="q-comments support">
            <li>
              <div class="comenter"> <img src="images/resources/q-comment1.jpg" alt=""> </div>
              <div class="comment-detail">
                <h5>Michael Baker</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
              </div>
              <ul class="comment-date">
                <li><span>October 21, 2017</span></li>
                <li class="status mango"><span>open</span></li>
              </ul>
            </li>
            <li>
              <div class="comenter"> <img src="images/resources/q-comment1.jpg" alt=""> </div>
              <div class="comment-detail">
                <h5>Michael Baker</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
              </div>
              <ul class="comment-date">
                <li><span>October 21, 2017</span></li>
                <li class="status berry"><span>open</span></li>
              </ul>
            </li>
            <li>
              <div class="comenter"> <img src="images/resources/q-comment1.jpg" alt=""> </div>
              <div class="comment-detail">
                <h5>Michael Baker</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
              </div>
              <ul class="comment-date">
                <li><span>October 21, 2017</span></li>
                <li class="status carrot"><span>open</span></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- user list -->
    </div>
    <!-- customer support widget -->
    <div class="col-md-6">
      <div class="widget">
        <div class="widget-title">
          <h4>Quick Actions</h4>
          <ul class="widget-controls">
              <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
              <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
              <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
          </ul>
        </div>
        <div class="widget-peding">
          <ul class="q-comments">
            <li>
              <div class="comenter"> <img src="images/resources/q-comment1.jpg" alt=""> </div>
              <div class="comment-detail">
                <h5>Michael Baker</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
              </div>
              <ul class="comment-date">
                <li class="mango"><span>October 21, 2017</span></li>
                <li><span>9:30-13:00</span></li>
              </ul>
              <div class="approv-reject"> <a class="approve active" href="#" title="">approved</a> <a class="rejected" href="#" title="">reject</a> </div>
            </li>
            <li>
              <div class="comenter"> <img src="images/resources/q-comment2.jpg" alt=""> </div>
              <div class="comment-detail">
                <h5>Natasha Kim</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
              </div>
              <ul class="comment-date">
                <li class="carrot"><span>October 21, 2017</span></li>
                <li><span>9:30-13:00</span></li>
              </ul>
              <div class="approv-reject"> <a class="approve" href="#" title="">approved</a> <a class="rejected active" href="#" title="">reject</a> </div>
            </li>
            <li>
              <div class="comenter"> <img src="images/resources/q-comment3.jpg" alt=""> </div>
              <div class="comment-detail">
                <h5>Jason Bourne</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
              </div>
              <ul class="comment-date">
                <li class="berry"><span>October 21, 2017</span></li>
                <li><span>9:30-13:00</span></li>
              </ul>
              <div class="approv-reject"> <a class="approve active" href="#" title="">approved</a> <a class="rejected" href="#" title="">reject</a> </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- user list -->
    </div>
    <!-- quick action widget -->
  </div>
  @endsection

@section('extra')
@endsection
