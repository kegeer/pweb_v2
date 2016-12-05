@extends('layouts.default')

@section('content')
  <div id="baba">
    @include('layouts.navbar')

    <div class="container-fluid block subheading">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>粑粑说</h3>
            <h4>肠道菌群检测成人精英版</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid block" id="baba-info">
      <div class="container">
        <div class="col-lg-3 col-lg-push-1 col-md-4 md-text-right">
          <div class="product-feature">
              <h5>肠道菌群健康平衡状况</h5>
              <p class="m-b-0 text-muted">
                肠道菌群多样性，有益菌、有害菌含量，肠型及常见菌属含量情况
              </p>
            </div>
            <div class="product-feature m-t-120">
                <h5>肠道菌群的营养吸收代谢能力</h5>
                <p class="m-b-0 text-muted">
                了解人体中三大营养物质代谢水平，以及其他生命活动功能相关物质的代谢水平
                </p>
            </div>
          </div>
          <div class="col-lg-4 col-lg-push-1 col-md-4">
            <img src="/images/products/baba.png" alt="" class="img-responsive img-intro">
          </div>
          <div class="col-lg-3 col-lg-push-1 col-md-4 md-text-left">
            <div class="product-feature">
                <h5>致病菌与疾病指数</h5>
                <p class="m-b-0 text-muted">
                  检测致病菌种类、含量及3种常见疾病的风险
                </p>
            </div>
            <div class="product-feature">
                <h5>肠道免疫功能</h5>
                <p class="m-b-0 text-muted">
                  了解肠道菌群免疫水平
                </p>
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
                  <h2>适用领域以及症状</h2>
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


  </div>
