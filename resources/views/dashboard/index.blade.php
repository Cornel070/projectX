@extends('layouts.simple.master')
@section('title', 'Enterprise')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
@endsection

@section('breadcrumb-title')
<h3>Enterprise</h3>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-9 xl-100 box-col-12">
         <div class="row">
            <div class="col-12">
               <div class="project-overview">
                  <div class="row">
                     <div class="col-xl-2 col-sm-4 col-6">
                        <h2 class="f-w-600 counter font-primary">18</h2>
                        <p class="mb-0">Active Cases</p>
                     </div>
                     <div class="col-xl-2 col-sm-4 col-6">
                        <h2 class="f-w-600 counter font-secondary">143</h2>
                        <p class="mb-0">Pending Tasks</p>
                     </div>
                     <div class="col-xl-2 col-sm-4 col-6">
                        <h2 class="f-w-600 counter font-success">574</h2>
                        <p class="mb-0">Upcoming Events</p>
                     </div>
                     <div class="col-xl-2 col-sm-4 col-6">
                        <h2 class="f-w-600 counter font-info">15</h2>
                        <p class="mb-0">New Messages</p>
                     </div>
                     <div class="col-xl-2 col-sm-4 col-6">
                        <h2 class="f-w-600 counter font-warning">20</h2>
                        <p class="mb-0">Open Requests</p>
                     </div>
                     <div class="col-xl-2 col-sm-4 col-6">
                        <h2 class="f-w-600 counter font-danger">312</h2>
                        <p class="mb-0">Hours Spent</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-7 box-col-6">
               <div class="card card-with-border monthly-growth">
                  <div class="card-header card-no-border">
                     <h5>Task Completion Level</h5>
                     <div class="chart-value-box pull-right chart-data-set">
                        <div class="value-square-box-info"></div>
                        <span>Tasks</span>
                     </div>
                     <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                           <li><i class="icofont icofont-double-left"></i></li>
                           <li><i class="view-html fa fa-code"></i></li>
                           <li><i class="icofont icofont-maximize full-card"></i></li>
                           <li><i class="icofont icofont-minus minimize-card"></i></li>
                           <li><i class="icofont icofont-refresh reload-card"></i></li>
                           <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body pt-0 o-hidden">
                     <div class="spaline-container">
                        <div id="area-spaline"></div>
                     </div>
                     <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body pt-0 o-hidden"&gt;
  &lt;div class="spaline-container"&gt;
    &lt;div id="area-spaline"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-5 box-col-6">
               <div class="card card-with-border">
                  <div class="card-header card-no-border">
                     <h5>Tasks</h5>
                     <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                           <li><i class="icofont icofont-double-left"></i></li>
                           <li><i class="view-html fa fa-code"></i></li>
                           <li><i class="icofont icofont-maximize full-card"></i></li>
                           <li><i class="icofont icofont-minus minimize-card"></i></li>
                           <li><i class="icofont icofont-refresh reload-card"></i></li>
                           <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body pt-0 o-hidden">
                     <div class="apex-circle">
                        <div id="circlechart"></div>
                     </div>
                     <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body pt-0 o-hidden"&gt;
  &lt;div class="apex-circle"&gt;
    &lt;div id="circlechart"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 xl-100 box-col-6">
         <div class="card card-with-border connection firm-activity">
            <div class="card-header">
               <h5 class="d-inline-block">Firm Activity</h5>
               <span class="pull-right mt-0">457</span>
            </div>
            <div class="card-body p-0">
               <ul>
                  <li>
                     <div class="media">
                        <img class="img-40 m-r-15 rounded-circle" src="{{asset('assets/images/user/2.png')}}" alt="">
                        <div class="media-body">
                           <span> <span class="f-w-600">Jason Borne</span> uploaded this file</span>
                           <p>Just Now</p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="media">
                        <img class="img-40 m-r-15 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                        <div class="media-body">
                           <span><span class="f-w-600">Vincent Porter</span> created this new case</span>
                           <p>10:00 AM Today</p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="media">
                        <img class="img-40 m-r-15 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="">
                        <div class="media-body">
                           <span><span class="f-w-600">Erica Hughes</span> created an event</span>
                           <p>4:00 PM Yesterday</p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="media">
                        <img class="img-40 m-r-15 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                        <div class="media-body">
                           <span><span class="f-w-600">Hileri Jecno</span> completed this task</span>
                           <p>2:30 PM Yesterday</p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="media">
                        <img class="img-40 m-r-15 rounded-circle" src="{{asset('assets/images/user/8.jpg')}}" alt="">
                        <div class="media-body">
                           <span><span class="f-w-600">Ginger Johnston</span> uploaded this file</span>
                           <p>11:45 AM Monday</p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="media">
                        <img class="img-40 m-r-15 rounded-circle" src="{{asset('assets/images/user/2.png')}}" alt="">
                        <div class="media-body">
                           <span><span class="f-w-600">Jason Borne</span> assigned a task to <span class="f-w-600">Erica Hughes</span></span>
                           <p>9:15 AM Saturday</p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="media">
                        <img class="img-40 m-r-15 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                        <div class="media-body">
                           <span><span class="f-w-600">Vincent Porter</span> created an event</span>
                           <p>10:00 AM Monday           </p>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-xl-9 xl-60 box-col-6">
         <div class="card card-with-border project-card">
            <div class="card-header">
               <h5>Project Status</h5>
               <span>Details of our project status</span>
               <div class="dashboard-btn-groups">
                  <div class="btn-group" role="group" aria-label="Basic example">
                     <button class="btn btn-outline-light btn-js" type="button">Day</button>
                     <button class="btn btn-outline-light btn-js" type="button">Week</button>
                     <button class="btn btn-outline-light btn-js active" type="button">Month</button>
                  </div>
               </div>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-double-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
            </div>
            <div class="card-body p-0">
               <div class="table-responsive project-tables">
                  <table class="table table-bordernone">
                     <thead>
                        <tr>
                           <th>Task</th>
                           <th>Status</th>
                           <th>Deadline</th>
                           <th>Progress</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Network Infrastructure strategy</td>
                           <td>
                              <div class="badge badge-light-info">Pending</div>
                           </td>
                           <td><span>Jul 14, 2018</span></td>
                           <td>
                              <div class="progress-showcase">
                                 <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>Server hosting Issues</td>
                           <td>
                              <div class="badge badge-light-success">Done</div>
                           </td>
                           <td><span>Aug 18, 2018</span></td>
                           <td>
                              <div class="progress-showcase">
                                 <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>Flexible Server hosting</td>
                           <td>
                              <div class="badge badge-light-danger">In Process</div>
                           </td>
                           <td><span>Sep 23, 2018</span></td>
                           <td>
                              <div class="progress-showcase">
                                 <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>Data management plans</td>
                           <td>
                              <div class="badge badge-light-secondary">Pending</div>
                           </td>
                           <td><span>Oct 11, 2018</span></td>
                           <td>
                              <div class="progress-showcase">
                                 <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>Storage Strategy</td>
                           <td>
                              <div class="badge badge-light-warning">In Process</div>
                           </td>
                           <td><span>Oct 20, 2018</span></td>
                           <td>
                              <div class="progress-showcase">
                                 <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>CMVM Digitisation of paper records</td>
                           <td>
                              <div class="badge badge-light-success">Done</div>
                           </td>
                           <td><span>Oct 28, 2018</span></td>
                           <td>
                              <div class="progress-showcase">
                                 <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>REF readiness</td>
                           <td>
                              <div class="badge badge-light-primary">Done</div>
                           </td>
                           <td><span>Nov 5, 2018</span></td>
                           <td>
                              <div class="progress-showcase">
                                 <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="table-responsive project-tables"&gt;
  &lt;table class="table table-bordernone"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;Task&lt;/th&gt;
        &lt;th&gt;Status&lt;/th&gt;
        &lt;th&gt;Deadline&lt;/th&gt;
        &lt;th&gt;Progress&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td&gt;Network Infrastructure strategy&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="badge badge-light-info"&gt;Pending&lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;span&gt;Jul 14, 2018&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Server hosting Issues&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="badge badge-light-success"&gt;Done&lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;span&gt;Aug 18, 2018&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Flexible Server hosting&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="badge badge-light-danger"&gt;In Process&lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;span&gt;Sep 23, 2018&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Data management plans&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="badge badge-light-secondary"&gt;Pending&lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;span&gt;Oct 11, 2018&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Storage Strategy&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="badge badge-light-warning"&gt;In Process&lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;span&gt;Oct 20, 2018&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;CMVM Digitisation of paper records&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="badge badge-light-success"&gt;Done&lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;span&gt;Oct 28, 2018&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;REF readiness&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="badge badge-light-primary"&gt;Done&lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;span&gt;Nov 5, 2018&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 xl-40 box-col-12">
         <div class="row">
            <div class="col-xl-12 col-md-6 box-col-6">
               <div class="card card-with-border">
                  <div class="card-body revenue-project">
                     <h6>Monthly Sale</h6>
                     <ul>
                        <li>
                           <p>Growth</p>
                           <h4>$<span class="counter">67140</span></h4>
                        </li>
                        <li>
                           <div class="apex-spark">
                              <div id="spark3"></div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-12 col-md-6 box-col-6">
               <div class="card card-with-border">
                  <div class="card-body revenue-project inovice-ul">
                     <h6>Invoices</h6>
                     <ul>
                        <li>
                           <p>Due</p>
                           <h4>$<span class="counter">54612</span></h4>
                        </li>
                        <li>
                           <p>Overdue</p>
                           <h4>$<span class="counter">61271</span></h4>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-12 box-col-12">
               <div class="card card-with-border">
                  <div class="card-header">
                     <h6 class="mb-0">My Status</h6>
                  </div>
                  <div class="card-body p-0 my-status">
                     <ul>
                        <li><span>Task Pending<span class="f-12 font-warning pull-right">18</span></span></li>
                        <li><span>Active Projects<span class="f-12 font-success pull-right">24</span></span></li>
                        <li><span>Support Tickets<span class="f-12 font-info pull-right">47</span></span></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 box-col-12">
         <div class="row overall-report">
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card card-with-border">
                  <div class="card-body">
                     <div class="text-center">
                        <h2 class="counter f-w-600">124</h2>
                        <p>Total Employee</p>
                        <div class="employees"><i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-female light-icon"></i><i class="fa fa-female light-icon"></i><i class="fa fa-female light-icon"></i><i class="fa fa-female light-icon"> </i></div>
                     </div>
                     <div class="employee-progress">
                        <div class="value-total">
                           <label>Female (80%)</label>
                           <div class="progress-showcase">
                              <div class="progress sm-progress-bar">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                        </div>
                        <div class="value-total">
                           <label>Male (20%)</label>
                           <div class="progress-showcase">
                              <div class="progress sm-progress-bar">
                                 <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                        </div>
                        <div class="value-total">
                           <label>Total Staff</label>
                           <div class="progress-showcase">
                              <div class="progress sm-progress-bar">
                                 <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card card-with-border">
                  <div class="card-body">
                     <div class="text-center">
                        <h2 class="counter f-w-600">47</h2>
                        <p>Total Products</p>
                        <div class="employees"><i class="fa fa-cube"></i><i class="fa fa-cube"></i><i class="fa fa-cube"></i><i class="fa fa-cube"></i><i class="fa fa-cube"></i><i class="fa fa-cube"></i><i class="fa fa-cube light-icon"></i><i class="fa fa-cube light-icon"></i></div>
                     </div>
                     <div class="employee-progress">
                        <div class="value-total">
                           <label>Digital products (75%)</label>
                           <div class="progress-showcase">
                              <div class="progress sm-progress-bar">
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                        </div>
                        <div class="value-total">
                           <label>Non-digital products (25%)</label>
                           <div class="progress-showcase">
                              <div class="progress sm-progress-bar">
                                 <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                        </div>
                        <div class="value-total">
                           <label>Total Products</label>
                           <div class="progress-showcase">
                              <div class="progress sm-progress-bar">
                                 <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 xl-100 box-col-12">
               <div class="card card-with-border tickets">
                  <div class="card-header card-no-border">
                     <div class="d-flex">
                        <h5>Monthly Revenue</h5>
                        <button class="btn btn-outline-light" type="button">Last Week <i class="fa fa-caret-down"></i></button>
                     </div>
                  </div>
                  <div class="card-body pt-0">
                     <div class="likes-page pl-0">
                        <h4 class="mb-0">$46,814 <span class="font-danger f-12"><i data-feather="arrow-up"></i>1.8% </span></h4>
                     </div>
                     <div class="apex-monthly">
                        <div id="monthly"> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/dashboard/dashboard_4.js')}}"></script>
@endsection