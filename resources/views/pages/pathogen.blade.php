@extends('layouts.app')

@section('content')
	<section class="bg-head pathogen-head">
		<div class="container">
			<div class="position-center-center">
				<h3>临床微生态</h3>
				<p>无需培养的病原微生物快速检测</p>
			</div>
		</div>
	</section>
	<div class="container-fluid bgc-l-g block">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="text-center intro-head">
					<h3>病原微生物检测</h3>
					<p>
						基于高通量测序技术，分析脑脊液或血液样本中的游离DNA，可同时鉴定样本中的多种可疑病原微生物，用于协助临床医师进一步分析诊断，检测范围包括细菌、病毒、真菌、寄生虫、古菌、支原体、衣原体、立克次氏体及螺旋体等在内的一万多种基因组序列已知的微生物
					</p>
					<a class="btn" href="#pathogen-feature">了解更多</a>
				</div>
			</div>
		</div>

	</div>
</div>
	<div class="container-fluid block" id="pathogen-feature">
      <div class="container">
         <div class="col-sm-4 text-center">
          <div class="media-body">
            <span class="icon"><img src="/images/icons/p-f-1.png"></span>
            <h3>快速筛查</h3>
            <p class="text-muted">无需培养，测序速度快</p>
          </div>
        </div>
         <div class="col-sm-4 text-center">
          <div class="media-body">
            <span class="icon"><img src="/images/icons/p-f-2.png"></span>
            <h3>灵敏检测</h3>
            <p class="text-muted">50 copies/ml 的最低检出限</p>
          </div>
        </div>
         <div class="col-sm-4 text-center">
          <div class="media-body">
            <span class="icon"><img src="/images/icons/p-f-3.png"></span>
            <h3>全面覆盖</h3>
            <p class="text-muted">可同时检测10000余种序列已知微生物</p>
          </div>
        </div>
      </div>
    </div>

  <div class="container-fluid block">
    <div class="container">
      <div class="row pathogen-product">
        <div class="col-md-12">
          <ul class="patho-nav-tabs nav nav-tabs bootstrap-tabs">
            <li class="active">
              <a href="#brain" data-toggle="tab" aria-expanded="true">
                <div class="icon lg icon-brain"></div>
                <div class="icon dk icon-brain-dk"></div>
								<h5 class="text-center">脑元谱</h5>
              </a>

            </li>
            <li>
              <a href="#blood" data-toggle="tab" aria-expanded="true">
                <div class="icon lg icon-blood"></div>
                <div class="icon dk icon-blood-dk"></div>
								<h5 class="text-center">血元谱</h5>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tab-content">
            <div class="row tab-pane active border-primary" id="brain">
              <div class="col-md-6">
                <div class="product-content">
                  <div class="head">
                    <span class="icon-brain-intro"></span>
                    <h3>脑脊液病原菌检测</h3>
										{{-- <h6>脑脊液病原微生物检测</h6> --}}
                    <p><span>检测</span>感染性脑膜炎、脑炎</p>
                  </div>
                  <p>颅内感染疾病可能由于细菌、病毒、真菌、寄生虫等引起，脑脊液的快速微生物检测可以帮助医护人员明确引起感染的病原微生物，早期诊断和治疗，可减少并发症的发生</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="product-steps">
                  <div class="head">
                    <span class="icon icon-tube"></span>
                    <h3>脑脊液样品处理</h3>
                  </div>
                  <ul>
                    <li><span>取样要求:</span>
                      <ul class="sub-steps">
                        <li>最佳采样时间为抗生素使用前</li>
                        <li>采集后迅速4℃保存，4小时内冻存</li>
                        <li>避免血液污染</li>
                      </ul>
                    </li>
                    <li><span>保存容器:</span>1.5ml/2ml EP管冻存管</li>
                    <li><span>保存条件:</span>-20°C保存一周，-80°C长期保存</li>
                    <li><span>运输条件:</span>干冰保存运输</li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="row tab-pane border-primary" id="blood">
              <div class="col-md-6">
                <div class="product-content">
                  <div class="head">
                    <span class="icon-blood-intro"></span>
                    <h3>血液病原菌检测</h3>
                    <p><span>检测</span>血流感染</p>
                  </div>
                  <p>直接由血流感染引起的死亡率达16%-40%，而ICU患者甚至高达50%，统计表明严重败血症患者每延迟一小时使用抗生素将增加8%的死亡率，快速病原微生物检测可为病人赢取更多的时间</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="product-steps">
                  <div class="head">
                    <span class="icon icon-tube"></span>
                    <h3>血液样品处理</h3>
                  </div>
                  <ul>
                    <li><span>取样要求:</span>
                      <ul class="sub-steps">
                        <li>EDTA抗凝管采样</li>
                        <li>采集后迅速4℃保存，6小时内分离血浆</li>
                      </ul>
                    </li>
                    <li><span>保存容器:</span>1.5ml/2ml EP管冻存管</li>
                    <li><span>保存条件:</span>-20°C保存一周，-80°C长期保存</li>
                    <li><span>运输条件:</span>干冰保存运输</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid block bgi-step bgc-l-g">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="step">
            <div class="circle">
              <div class="icon-p-s-1"></div>
            </div>
            <h3>核酸提取</h3>
          </div>
        </div>
        <div class="col-md-2">
          <div class="step">
            <div class="circle">
              <div class="icon-p-s-2"></div>
            </div>
            <h3>文库构建</h3>
          </div>
        </div>
        <div class="col-md-2">
          <div class="step">
            <div class="circle">
              <div class="icon-p-s-3"></div>
            </div>
            <h3>序列测定</h3>
          </div>
        </div>
        <div class="col-md-2">
          <div class="step">
            <div class="circle">
              <div class="icon-p-s-4"></div>
            </div>
            <h3>序列分析</h3>
          </div>
        </div>
        <div class="col-md-2">
          <div class="step">
            <div class="circle">
              <div class="icon-p-s-5"></div>
            </div>
            <h3>信息解读</h3>
          </div>
        </div>
        <div class="col-md-2">
          <div class="step">
            <div class="circle">
              <div class="icon-p-s-6"></div>
            </div>
            <h3>报告撰写</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="container-fluid block">
    <div class="container">
    <div class="block-header">
      <h3>病原实时分析系统</h3>
      <p>未来我们希望能够推出一款边测序边分析的实时分析系统</p>
    </div>

    </div>
  </div> --}}
@stop
