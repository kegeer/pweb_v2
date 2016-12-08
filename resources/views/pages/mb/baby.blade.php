@extends('layouts.app')

@section('content')
	<section class="bg-head baby-head">
		<div class="container">
			<div class="position-center-center  product-head">
				<h3>婴fen说</h3>
				<h6>婴幼儿营养代谢检测</h6>
				<p>主要营养物质代谢、生长发育关键物质合成、益生菌含量</p>
			</div>
		</div>
	</section>
	<div class="container-fluid block bgc-l-g">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-10 col-md-offset-1 product-intro">
			  		<h4>产品简介</h4>
            <p>营养代谢直接关系婴幼儿的生长发育情况和合理性，而肠道是营养消化吸收的最直接场所，检测肠道菌群的状况，帮助评估婴幼儿的能量摄入量、营养均衡性、生理功能发育重要物质、潜在感染风险等。</p>
						<a href="#baby-info" class="btn">了解更多</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid block" id="baby-info">
    <div class="container">
				<h3 class="text-center">
					孩子生长发育，从“肠”开始
				</h3>

				<div class="row box-list">
						<a class="box-item border-top-p item-3" href="#">
							<h5>三大营养物质</h5>
							<p>碳水化合物、脂类和蛋白质是产能营养素，检测它们能够反映机体对能量的需求是否得到满足。</p>
						</a>

						<a class="box-item border-top-s item-3" href="#">
							<h5>生长发育关键物质</h5>
							<p>必需氨基酸、维生素和生长发育关键物质如DHA，EPA等，对婴幼儿生长发育至关重要，检测它们能反映婴幼儿生长发育情况。</p>
						</a>

						<a class="box-item border-top-t item-3" href="#">
							<h5>益生菌含量</h5>
							<p>检测婴幼儿肠道中益生菌含量，预防因益生菌缺少而导致腹泻、感染的风险增加。</p>
						</a>
				</div>
				<div class="row product-image">
					<div class="divider">
						<div class="col-md-4 col-md-offset-4">
							<i>
								<img src="/images/products/baby.png" alt="" class="img-responsive">
							</i>
						</div>
					</div>
				</div>
      </div>
    </div>

		<div class="container-fluid block bgi-step product-step bgc-p">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-i-1"></div>
              </div>
              <h3>咨询和购买</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-i-2"></div>
              </div>
              <h3>样品采集</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-i-3"></div>
              </div>
              <h3>样品寄送</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-i-4"></div>
              </div>
              <h3>样品处理</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-i-5"></div>
              </div>
              <h3>序列解析</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-i-6"></div>
              </div>
              <h3>报告出具</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid block bgc-l-g">
      <div class="container">
        <div class="row">
          <div class="row row-double right">
              <div class="col-md-6 image">
                  <img src="/images/baby-suit.jpg" class="bg-image">
              </div>
              <div class="col-md-6 content">
                  <h2>适用人群以及症状</h2>
                  <p class="text-white-dark m-b-15">
                      0-2岁婴幼儿，并有以下情况者推荐检测
                  </p>
                  <ul class="list-items">
                      <li><i class="fa fa-check"></i>早期使用抗生素</li>
                      <li><i class="fa fa-check"></i>非母乳喂养</li>
                      <li><i class="fa fa-check"></i>腹泻或便秘</li>
                      <li><i class="fa fa-check"></i>希望留下肠道最初状态的“快照”</li>
                  </ul>
                  <span>
                  <a href="/us" class="outline">
                      <i class="fa fa-envelope"></i>
                      联系我们
                  </a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop
