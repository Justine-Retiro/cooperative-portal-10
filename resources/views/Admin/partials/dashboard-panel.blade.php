@extends('Admin.layouts.admin-layout')

@section('admin')
<div class="container-fluid xyz">
    <div class="row">
      <div class="col-lg-12">
        @if(auth('admin')->check())
        <h1 id="user-greet">
            Hi, {{ auth('admin')->user()->username }}
        @endif
        </h1>
        <h1>
          Dashboard Overview
        </h1>
        <div class="row" style="margin-top: 2em;">
          <!-- Requests -->
          <div class="col-md-2 w-auto">
            <div id="card-container" style="width: auto;">
              <div id="card-title">
                  <table>
                    <tr>
                        <td>New loan request</td>
                    </tr>
                    <tr>
                        <th style="font-size: 25px;">3 Member/s</th>
                    </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- Count -->
          <div class="col-md-2 w-auto">
            <div id="card-container">
              <div id="card-title">
                <table>
                  <tr>
                    <td>Total of Members</td>
                  </tr>
                  <tr>
                    <th style="font-size: 25px;">3 Member/s</th>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- /Requets -->
      </div>
    </div>
  </div>
@endsection('admin')
