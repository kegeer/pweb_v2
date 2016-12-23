@extends('layouts.app')

@section('content')
	<section class="bg-head home-head">
		<div class="container">
			<div class="position-center-center">
				<h3>数字微生态</h3>
				<p>谱绘生命本元</p>
				<a href="/us" class="btn">了解谱元</a>
				<a href="/partner" class="btn btn-trans">探索微生态</a>
			</div>
		</div>
	</section>
	<div class="container-fluid block feature">
      <div class="container">
        <div class="row feature-section">
          <div class="col-md-4 text-center">
            <div class="media-box">
              <span class="icon"><img src="/images/icons/feature-1.png"></span>
              <h3>数据引擎</h3>
              <p class="text-muted">数十万份样品数据</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="media-box">
              <span class="icon"><img src="/images/icons/feature-2.png"></span>
              <h3>计算引擎</h3>
              <p class="text-muted">数十年技术研发</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="media-box">
              <span class="icon"><img src="/images/icons/feature-3.png"></span>
              <h3>知识引擎</h3>
              <p class="text-muted">数万小时数据积累</p>
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
            <h6>构建良性健康状态，关注健康检测与管理</h6>
            <p>肠道健康、母婴健康、慢病预防与管理，为您的健康保驾护航</p>
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
            <h6>精准预测，个性化营养</h6>
            <p>解析肠道微生物吸收功能，综合评估个体肠道健康差异，指导因人而异的营养需求</p>
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
            <h6>无需培养的快速微生物检测</h6>
            <p>无需培养，可快速、全面检测脑脊液或血液样本中的未知细菌、真菌、病毒、寄生虫等可疑病原微生物，有助于明确诊断，精准治疗</p>
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
          <div class="row row-centered box-list">
						<a class="box-item border-top-p item-2" href="/partner">
							<h5>科研合作</h5>
							<p>一起挖掘微生物的未知领域</p>
							<p class="text-cta arrow">
								了解更多
							</p>
						</a>

						<a class="box-item border-top-s item-2" href="/partner">
							<h5>商务合作</h5>
							<p>一起寻找微生态应用的解决之道</p>
							<p class="text-cta arrow">
								了解更多
							</p>
						</a>
          </div>
        </div>
      </div>
    </div>
@stop
