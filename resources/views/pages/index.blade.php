@extends('layouts.app')

@section('content')
	<section class="bg-head home-head">
		<div class="container">
			<div class="position-center-center">
				<h3>数字微生态</h3>
				<p>加速微生物研究的新数字引擎</p>
				<a href="/us" class="btn">了解谱元</a>
				<a href="/partner" class="btn btn-trans">探索微生态</a>
			</div>
		</div>
	</section>
	<div class="container-fluid block feature">
      <div class="container">
        <div class="row feature-section">
          <div class="col-sm-4 text-center">
            <div class="media-box">
              <span class="icon"><img src="/images/icons/feature-1.png"></span>
              <h3>数据</h3>
              <p class="text-muted">十万份样品数据</p>
            </div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="media-box">
              <span class="icon"><img src="/images/icons/feature-2.png"></span>
              <h3>计算</h3>
              <p class="text-muted">万个计算节点</p>
            </div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="media-box">
              <span class="icon"><img src="/images/icons/feature-3.png"></span>
              <h3>解读</h3>
              <p class="text-muted">万小时数据积累</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid block">
      <div class="container">
        <div class="row intro">
          <div class="col-md-6 intro-content">
            <h3 class="intro-title">健康微生态</h3>
            <p>基于微生物的疾病预防检测</p>
            <p>产品线涵盖婴幼儿、孕妇、白领，以及患有各种慢性病的人群，通过检测可以快熟全面了解您的健康状态，为您的健康保驾护航</p>
						<a href="/microbiome" class="intro-link"><i class="fa fa-arrow-right"></i>
                了解更多关于健康微生态的产品
            </a>
          </div>
          <div class="col-md-6">
						<div class="intro-image">
							<img src="/images/intro-1.png" class="intro-image-1" style="max-width: 400px;">
						</div>
          </div>
        </div>

				<div class="row intro row-reverse">
          <div class="col-md-6 intro-content">
            <h3 class="intro-title">营养微生态</h3>
            <p>基于微生物组和代谢组学的健康指导</p>
            <p>通过微生物和代谢资料能够对您的营养膳食提供一份精准的肠道菌群调节方案，配合其他合适方式，能够快熟方便的改善您的健康状态</p>
						{{-- <a href="/" class="intro-link disabled"><i class="fa fa-arrow-right"></i>
                了解更多关于营养微生态的产品
            </a> --}}
          </div>
          <div class="col-md-6">
						<div class="intro-image">
							<img src="/images/intro-2.png" class="intro-image-1" style="max-width: 400px;">
						</div>
          </div>
        </div>

				<div class="row intro">
          <div class="col-md-6 intro-content">
            <h3 class="intro-title">临床微生态</h3>
            <p>基于高通量测序平台的病原微生物检测系统</p>
            <p>无需培养，快速，全面检测脑脊液样品或血液样品中的未知细菌、真菌、病毒、寄生虫等病原微生物。有助于明确诊断，精准治疗</p>
						<a href="/pathogen" class="intro-link"><i class="fa fa-arrow-right"></i>
                了解更多关于临床微生态的产品
            </a>
          </div>
          <div class="col-md-6">
						<div class="intro-image">
							<img src="/images/intro-3.png" class="intro-image-1" style="max-width: 400px;">
						</div>
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
@stop
