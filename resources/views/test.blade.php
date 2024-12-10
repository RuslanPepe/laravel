
<style>
  .model{
    font-size: 40px;
    margin: 0 0 0 300px;
  }
  .type{
    margin: 0 0 0 300px;
    font-size: 40px;
  }
  .model:hover + .type{
    color: pink;
  }
  .aHref:hover + .model{
    color: cyan;
  }
  .btn:hover + .model{
    background-color: brown;
  }
</style>
@endsection

@section('content')
  <button class="btn">Lorem ipsum dolor.</button>
  <div class="model">model</div>
  <div class="type">type</div>
@endsection
