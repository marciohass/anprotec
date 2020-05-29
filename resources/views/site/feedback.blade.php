@extends('site.master.header')
@extends('site.master.menu')
<div class="row" style="margin-top: 150px;"></div>
    <main role="main" class="mb-5">
      <div class="container mt-5">
        @if(session()->get('success'))
            <div class="alert alert-success text-center" style="background-color: #1316a3; color: #ff7000;">
            {{ session()->get('success') }}
            </div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        @endif
      </div>
    </main>
</div>
@extends('site.master.footer')
