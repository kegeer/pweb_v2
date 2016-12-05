@extends('layouts.default')

@section('content')
<div id="home">
  @include('layouts.navbar')

  <div class="container-fluid subheading">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>数字微生态</h1>
          <h2>营养、健康、医疗、探索共同组成了一个未曾造访的极大之地</h2>
          <p>
            <a href="/us" class="knowmore">
              了解更多
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid block feature bgc-l-g">
    <div class="container">
      <div class="row feature-section">
        <div class="col-sm-4 text-center">
          <div class="media-body">
            <span class="icon"><img src="/images/icons/feature-1.png"></span>
            <h3>数据</h3>
            <p class="text-muted">数十万份样品数据</p>
          </div>
        </div>
        <div class="col-sm-4 text-center">
          <div class="media-body">
            <span class="icon"><img src="/images/icons/feature-2.png"></span>
            <h3>计算</h3>
            <p class="text-muted">数万个计算节点</p>
          </div>
        </div>
        <div class="col-sm-4 text-center">
          <div class="media-body">
            <span class="icon"><img src="/images/icons/feature-3.png"></span>
            <h3>解读</h3>
            <p class="text-muted">数万小时数据积累</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid block divider">
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <h3>健康微生态</h3>
          <p>肠道菌群在人体健康中扮演重要角色</p>
          <p>无论是嗷嗷待哺的婴儿，还是正值壮年的你，亦或是年越古稀的老人，每个人都有独特的肠型，通过我们的检测，你可以随时掌握你的健康情况</p>
          <p></p>
        </div>
        <div class="col-md-7 text-center">
          <img src="/images/intro-1.png" class="call-img" style="max-width: 400px;">
        </div>
      </div>
    </div>
    
  </div>

  <div class="container-fluid block divider">
    <div class="container">
      <div class="row">
        <div class="col-md-7 text-center">
          <img src="/images/intro-2.png" class="call-img" style="max-width: 400px;">
        </div>
        <div class="col-md-5">
          <h3>营养微生态</h3>
          <p>肠道菌群在人体健康中扮演重要角色</p>
          <p>无论是嗷嗷待哺的婴儿，还是正值壮年的你，亦或是年越古稀的老人，每个人都有独特的肠型，通过我们的检测，你可以随时掌握你的健康情况</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid block divider">
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <h3>医疗微生态</h3>
          <p>肠道菌群在人体健康中扮演重要角色</p>
          <p>无论是嗷嗷待哺的婴儿，还是正值壮年的你，亦或是年越古稀的老人，每个人都有独特的肠型，通过我们的检测，你可以随时掌握你的健康情况</p>
          <p></p>
        </div>
        <div class="col-md-7 text-center">
          <img src="/images/intro-3.png" class="call-img" style="max-width: 400px;">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid block">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3>探索微生态</h3>
        </div>
      </div>

      <div class="row text-center">
        <img src="/images/intro-4.png" class="call-img call-img2" style="max-width: 700px;margin-bottom: 60px;">
        <div class="row row-centered">
          <div class="col-md-3 text-center col-centered">
            <h4>科研合作</h4>
            <p class="no-padding">
              一起挖掘微生物的未知领域
            </p>
          </div>
          <div class="col-md-3 text-center col-centered">
            <h4>商务合作</h4>
            <p class="no-padding">
              一起挖掘寻找疾病的解决之道
            </p>
          </div>
          <div class="col-md-3 text-center col-centered">
            <a href="/partner" class="outline" style="top: 50%">探索更多</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
@stop