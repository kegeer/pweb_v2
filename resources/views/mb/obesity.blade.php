@extends('layouts.default')

@section('content')
  <div id="baba">
    @include('layouts.navbar')

    <div class="container-fluid block subheading">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>体重管理检测</h3>
            <h4>精准的肥胖基因检测+肠道菌群代谢水平检测+个性化管理方案</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid feature bgc-l-g">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-10 col-md-offset-1 product-intro">
            <h4>肥胖风险基因、饮食不均衡、代谢水平异常等引发肥胖的发生。肥胖是高血压、高血脂、高血糖等慢性病的首要危险因素。人体肥胖风险基因检测与肠道菌群评估代谢水平，精准化制定个性化的体重管理方案。</h4>
            <p><a href="#obesity-info" class="knowmore">了解更多</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid block" id="obesity-info">
      <div class="container">
        <div class="col-lg-3 col-lg-push-1 col-md-4 md-text-right">
          <div class="product-feature">
              <h5>精准预测肥胖风险</h5>
              <p class="m-b-0 text-muted">
                肠道菌群+人自身基因组检测，准确预测肥胖风险
              </p>
            </div>
            <div class="product-feature m-t-120">
                <h5>评估肥胖相关疾病风险</h5>
                <p class="m-b-0 text-muted">
                肥胖是多种代谢性疾病的源头，通过菌群分析，评估相关疾病风险
                </p>
            </div>
          </div>
          <div class="col-lg-4 col-lg-push-1 col-md-4">
            <img src="/images/products/obesity.png" alt="" class="img-responsive img-intro">
          </div>
          <div class="col-lg-3 col-lg-push-1 col-md-4 md-text-left">
            <div class="product-feature">
                <h5>精准管理体重，健康减重</h5>
                <p class="m-b-0 text-muted">
                  科学地制定个性化健康管理方案，精准、健康减重
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
                  <img src="/images/obesity-suit.jpg" class="bg-image">
              </div>
              <div class="col-md-6 content">
                  <h2>适用领域以及症状</h2>
                  <p class="text-white-dark m-b-15">
                      以下情况推荐检测
                  </p>
                  <ul class="list-items">
                      <li><i class="fa fa-check"></i>BMI值>24</li>
                      <li><i class="fa fa-check"></i>心血管疾病既往史或家族史</li>
                      <li><i class="fa fa-check"></i>糖尿病既往史或家族史</li>
                      <li><i class="fa fa-check"></i>脂肪肝既往史或家族史</li>
                      <li><i class="fa fa-check"></i>关注自己身体健康的各类人群</li>
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
