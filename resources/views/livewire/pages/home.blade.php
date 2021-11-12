<div class="">
    <div class="container-torres">
        <div class="container-torre">
            <div class="torre">
                <img src="{{asset('img/torre-de-comunicacao.png')}}" class="img-fluid"/>
            </div>
            <div class="textLabel">
                <span>Informe a altura da torre 1</span> 
                <span class="span-value">Alcance: {{number_format($alcance_torre_um,2,'.','')}} Km</span>
            </div>
            <div class="inputValue">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" wire:model="altura_torre_um"
                    wire:keyup='alcanceTorres'>
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">Metros</span>
                    </div>
                  </div>
                  <div class="error-message" style="margin-top: -20px">
                    @error('altura_torre_um')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>


        <div class="container-load">
            <img src="{{asset('img/load.gif')}}" class="img-fluid" alt="" 
            wire:target="distanciaAntenas" wire:loading>
        </div>



        <div class="container-torre">
            <div class="torre">
                <img src="{{asset('img/torre-de-comunicacao.png')}}" class="img-fluid"/>
            </div>
            <div class="textLabel">
                <span>Informe a altura da torre 2</span> 
                <span class="span-value">Alcance: {{number_format($alcance_torre_dois,2,'.','')}} Km</span>
            </div>
            <div class="inputValue">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" wire:model="altura_torre_dois"
                    wire:keyup='alcanceTorres'>
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">Metros</span>
                    </div>
                  </div>
                  <div class="error-message" style="margin-top: -20px">
                    @error('altura_torre_dois')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="container-acoes d-flex justify-content-center">
        <a class="btn btn-lg btn-primary" wire:click='distanciaAntenas'>Calcular</a>
    </div>

    <div class="container-result">
        <h6>Distancia entre as torres:</h6>
        <h3>{{number_format($distancia_torres,2,'.','')}} Km</h3>
    </div>
</div>
