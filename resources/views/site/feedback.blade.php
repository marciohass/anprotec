@extends('site.master.header')
@extends('site.master.menu')
<div class="row" style="margin-top: 150px;"></div>
    <main role="main" class="mb-5">
      <div class="container">
        @if(session()->get('success'))
            <div class="alert alert-success text-center">
            {{ session()->get('success') }}
            </div><br />
        @endif
      </div>
    </main>
</div>
@extends('site.master.footer')
