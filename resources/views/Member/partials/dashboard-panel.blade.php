@extends('Member.layouts.member-layout')
@section('member')
<div class="container-fluid xyz">
    <div class="row"></div>
      <div class="col-lg-12">
          @if(auth()->check())
            <h1 id="user-greet">
              Hi, {{ auth()->user()->account_number }}
          @endif
        </h1>
        <h1>
          Dashboard Overview
        </h1>
        <div class="row" style="margin-top: 2em;">
          <!-- Chart -->
          <div class="col-lg-2 w-auto">
            <div id="card-container">
              <div id="card-title">
                  <table>
                    <tr>
                        <td>Account Balance</td>
                    </tr>
                    <tr>
                      <th style="font-size: 25px;">₱99999.00</th>
                    </tr>
                </table>
              </div>
            </div>
          </div>
          
          <!-- Reports -->
          <div class="col-md-12 mt-md-5">
            <div class="card">
              <div class="card-header">
                <h3 class="pt-2">History</h3>
                <div class="dropdown">
                  <button type="button" class="btn btn-link dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><button class="dropdown-item" onclick="location.reload();">Refresh</button></li>
                  </ul>
                </div>
              </div>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <tr>
                    <th>Transaction</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                  <tr>
                    <td>Transaction</td>
                    <td>Type</td>
                    <td>Date</td>
                    <td>Status</td>
                  </tr>

                </table>
              </div>
            </div>
          </div>
          
          
          <!-- /Reports -->
      </div>
    </div>
  </div>
@endsection('member')