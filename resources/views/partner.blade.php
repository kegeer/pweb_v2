@extends('layouts.default')

@section('content')
  <div id="partner">
    @include('layouts.navbar')

    <div class="container-fluid block subheading">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>合作伙伴</h3>
            <h4>我们愿用专业的技术得到您的认可</h4>
          </div>
        </div>
      </div>
    </div>


   <div class="container-fluid block bgc-l-g">
      <div class="container">
        <div class="row row-double right">
          <div class="col-md-6 image">
            <img src="/images/partner-1.jpg" class="bg-image">
          </div>
          <div class="col-md-6 content">
            <h2>科研合作</h2>
            <p>谱元科技专注于微生物检测领域，公司骨干成员在《自然》、《科学》、《新英格兰医学杂志》等知名刊物上发表过数十篇高水平的SCI论文，并拥有数项国内外技术发明专利。</p>
            <p>
              <a href="/us" class="outline text-gray">了解更多</a>
            </p>
          </div>
        </div>

        <div class="row row-double left">
          <div class="col-md-6 image">
            <img src="/images/partner-2.jpg" class="bg-image">
          </div>
          <div class="col-md-6 content">
            <h2>商务合作</h2>
            <p>如果您有现成的健康产品线，或许想给用户更加详实的管理，我们提供标准的肠道菌群研究结果，并且提供多方位的个性化定制，以供您可以无缝的嵌入到现有的产品线。</p>
            <p>
              <a href="/us" class="outline text-gray">了解更多</a>
            </p>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid block">
      <div class="container">
        <div class="row clients-row">
            <div class="col-md-3 col-sm-6 client border-bottom border-right">
                <img src="/images/clients/pt-1.jpg">
                <p>深圳市罗湖总医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-bottom border-right">
                <img src="/images/clients/pt-2.jpg">
                <p>深圳市儿童医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-bottom border-right">
                <img src="/images/clients/pt-3.jpg">
                <p>第四军医大学附属西京医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-bottom">
                <img src="/images/clients/pt-4.jpg">
                <p>中国人民解放军总医院</p>
            </div>
        </div>
        <div class="row clients-row">
            <div class="col-md-3 col-sm-6 client border-right">
                <img src="/images/clients/pt-5.jpg">
                <p>深圳市第二人民医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-right">
                <img src="/images/clients/pt-6.jpg">
                <p>北京大学人民医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-right">
                <img src="/images/clients/pt-7.jpg">
                <p>中国军事医学科学院</p>
            </div>
            <div class="col-md-3 col-sm-6 client">
                <img src="/images/clients/pt-8.jpg">
                <p>中国医学科学院肿瘤医院</p>
            </div>
        </div>
      </div>
    </div>
  </div>

 
@stop