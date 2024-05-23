<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="type_id" class="form-label">{{ __('Type de chambre') }}</label>
            <select name="type_id" class="form-control @error('type_id') is-invalid @enderror" id="type_id">
                <option value="">Sélectionnez un type de chambre</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}"
                        {{ old('type_id', optional($chambre)->type_id) == $type->id ? 'selected' : '' }}>
                        {{ $type->nom }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('type_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="num" class="form-label">Numéro</label>
            <input type="number" name="num" class="form-control @error('num') is-invalid @enderror"
                value="{{ old('num', $chambre?->num) }}" id="num" placeholder="Numéro du chambre">
            {!! $errors->first('num', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="prix_par_nuit" class="form-label">{{ __('Prix Par Nuit') }}</label>
            <input type="number" name="prix_par_nuit" class="form-control @error('prix_par_nuit') is-invalid @enderror"
                value="{{ old('prix_par_nuit', $chambre?->prix_par_nuit) }}" id="prix_par_nuit"
                placeholder="Prix Par Nuit">
            {!! $errors->first(
                'prix_par_nuit',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="prix_par_heure" class="form-label">{{ __('Prix Par Heure') }}</label>
            <input type="number" name="prix_par_heure"
                class="form-control @error('prix_par_heure') is-invalid @enderror"
                value="{{ old('prix_par_heure', $chambre?->prix_par_heure) }}" id="prix_par_heure"
                placeholder="Prix Par Heure">
            {!! $errors->first(
                'prix_par_heure',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="disponibilite" class="form-label">{{ __('Disponibilite') }}</label>
            <input type="text" name="disponibilite" class="form-control @error('disponibilite') is-invalid @enderror"
                value="{{ old('disponibilite', $chambre?->disponibilite) }}" id="disponibilite"
                placeholder="Disponibilite">
            {!! $errors->first(
                'disponibilite',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="form-group mb-2 mb-20">
            <label for="image_principale" class="form-label">{{ __('Image Principale') }}</label>
            <input type="file" name="image_principale"
                class="form-control @error('image_principale') is-invalid @enderror" id="image_principale">
            @error('image_principale')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>



    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
