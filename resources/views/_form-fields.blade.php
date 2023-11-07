<div class="col-xl-4 col-md-12 m-2">
    <div class="form-group">
        <label for="description" class="font-weight-bold"><strong>Descrição</strong></label>
        <input placeholder="Descrição" value="" id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description">
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>    

<div class="col-xl-2 col-md-12 m-2">
    <div class="form-group">
        <label for="value" class="font-weight-bold"><strong>Valor</strong></label>
        <input placeholder="Valor" value="" id="value" type="text" class="form-control @error('value') is-invalid @enderror" name="value">
        @error('value')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>    

<div class="col-xl-2 col-md-12 m-2">
    <div class="form-group">
        <label for="date" class="font-weight-bold"><strong>Data</strong></label>
        <input value="" id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date">
        @error('date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>   

<div class="col-xl-2 col-md-12 m-2">
    <div class="form-group mb-2">
        <label for="type" class="font-weight-bold"><strong>Tipo</strong></label>
        <select class="form-control @error('type') is-invalid @enderror" id="type" name="type">
            <option value="">Selecione...</option>
            <option value="">Entrada</option>
            <option value="">Saída</option>
        </select>
        @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>  