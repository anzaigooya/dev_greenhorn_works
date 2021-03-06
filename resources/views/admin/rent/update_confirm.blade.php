@extends('partials.admin_nav')

@section('content')

  <h1 class="brand-header">入力の確認</h1>
  {{ Form::open(['route' => 'admin.rent.updateItems', 'method' => 'PUT']) }}
    <div class="content">

      <ul class="rental-item-show-list">
        <li>
          <div class="form-group">
            <h4>名称</h4>
            {{ $data['name'] }}
          </div>
        </li>

        <li>
          <div class="form-group">
            <h4>種類</h4>
            {{ $category }}
          </div>
        </li>

        <li>
          <div class="form-group">
            <h4>概要・説明</h4>
            {{ $data['item_info'] }}
          </div>
        </li>
      </ul>

      <div class="bottom-btn-wrapper">
        <button type="submit" class="btn" >更新</button>
        <a href="{{ route('admin.rent.edit', $data) }}" class="bottom-btn">戻る</a>
      </div>

    </div>
  {{ Form::close() }}

@endsection