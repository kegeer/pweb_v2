@extends('layouts.app')

@section('content')
	<section class="bg-head baba-head">
		<div class="container">
			<div class="position-center-center product-head">
				<h3>粑粑说</h3>
				<h6>肠道菌群检测成人精英版</h6>
				<p>肠道健康的最全面评估，最精准管理</p>
			</div>
		</div>
</section>
	<div class="container-fluid block" id="baba-info">
      <div class="container">

				<h3 class="text-center m-b-30">
					肠道健康的最全面评估，最精准管理
				</h3>
				<div class="row box-list">
						<a class="box-item border-top-p item-4" href="#">
							<h5>菌群平衡</h5>
							<p>肠道菌群多样性，有益菌、有害菌含量，肠型及常见菌属含量情况</p>
						</a>

						<a class="box-item border-top-s item-4" href="#">
							<h5>营养代谢</h5>
							<p>了解人体中三大营养物质代谢水平，以及其他生命活动功能相关物质的代谢水平</p>
						</a>

						<a class="box-item border-top-t item-4" href="#">
							<h5>致病风险</h5>
							<p>检测致病菌种类、含量及3种常见疾病的风险</p>
						</a>

						<a class="box-item border-top-f item-4" href="#">
							<h5>免疫功能</h5>
							<p>了解肠道菌群免疫指数、异源物质降解情况、毒素降解情况</p>
						</a>
				</div>
				<div class="row product-image">
					<div class="divider">
						<div class="col-md-4 col-md-offset-4">
							<i>
								<img src="/images/products/baba.png" alt="" class="img-responsive">
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
                <div class="icon-p-s-1"></div>
              </div>
              <h3>咨询和购买</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-s-2"></div>
              </div>
              <h3>样品采集</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-s-3"></div>
              </div>
              <h3>样品寄送</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-s-4"></div>
              </div>
              <h3>样品处理</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-s-5"></div>
              </div>
              <h3>序列解析</h3>
            </div>
          </div>
          <div class="col-md-2">
            <div class="step">
              <div class="circle">
                <div class="icon-p-s-6"></div>
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
                  <img src="/images/baba-suit.jpg" class="bg-image">
              </div>
              <div class="col-md-6 content">
                  <h2>适用人群以及症状</h2>
                  <p class="text-white-dark m-b-15">
                      18岁以上人群，有预选情况推荐检测
                  </p>
                  <ul class="list-items">
                      <li><i class="fa fa-check"></i>久坐人群，肠胃不适者</li>
                      <li><i class="fa fa-check"></i>亚健康人群</li>
                      <li><i class="fa fa-check"></i>慢性疾病患者</li>
                      <li><i class="fa fa-check"></i>关注肠道健康的各类人群</li>
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
