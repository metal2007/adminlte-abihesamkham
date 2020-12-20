@extends('admin.section.include')
{{-- در هر صفحه ای که میسازیم باید کله محتویات این صفحه رو  داخلش قرار بدیم --}}
{{-- یا ایکنه از این صفحه یک کپی میگریم و اسمش رو عوض میکنیم --}}


@section('content')
{{-- تگ زیر هم باید در هر صفحه بصورت جدا کپی بشه چون باید ادرس هر صفحه ای که داخلش هستیم رو در بالایه سایت نمایش بده --}}
{{-- برای اینکار بهتره کل کدهای زیر رو کپی و در  هر صفحه ای که میسازیم قرا بدیم --}}
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">صفحه سریع</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">صفحه سریع</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
{{-- این صفحه اصلی رو میشه در تمام صفحه ها بکار برد برایه اینکه متن در وسط باشه  کافیه مطالب بین این تگ ها قرا بگیره --}}
{{-- =========================================================== --}}












{{-- =========================================================== --}}
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
