<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 d-none mb20">
            <label for="chambre_id" class="form-label">{{ __('Chambre Id') }}</label>
            <input type="text" name="chambre_id" class="form-control @error('chambre_id') is-invalid @enderror"
                value="{{ old('chambre_id', $chambre_id) }}" id="chambre_id" placeholder="Chambre Id">
            {!! $errors->first('chambre_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group mb-2 mb20">
                    <label for="date_arrivee" class="form-label">{{ __('Date Arrivee') }}</label>
                    <input type="date" name="date_arrivee"
                        class="form-control @error('date_arrivee') is-invalid @enderror"
                        value="{{ old('date_arrivee', $reservation?->date_arrivee) }}" id="date_arrivee"
                        placeholder="Date Arrivee">
                    {!! $errors->first('date_arrivee', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group mb-2 mb20">
                    <label for="date_depart" class="form-label">{{ __('Date Depart') }}</label>
                    <input type="date" name="date_depart"
                        class="form-control @error('date_depart') is-invalid @enderror"
                        value="{{ old('date_depart', $reservation?->date_depart) }}" id="date_depart"
                        placeholder="Date Depart">
                    {!! $errors->first('date_depart', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>



        <div class="form-group mb-2 mb20">
            <label for="nom_client" class="form-label">{{ __('Nom Client') }}</label>
            <input type="text" name="nom_client" class="form-control @error('nom_client') is-invalid @enderror"
                value="{{ old('nom_client', $reservation?->nom_client) }}" id="nom_client" placeholder="Nom Client">
            {!! $errors->first('nom_client', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cin" class="form-label">{{ __('Cin') }} ou pasport Client</label>
            <input type="text" name="cin" class="form-control @error('cin') is-invalid @enderror"
                value="{{ old('cin', $reservation?->cin) }}" id="cin" placeholder="Cin">
            {!! $errors->first('cin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telephone_client" class="form-label">{{ __('Telephone Client') }}</label>
            <input type="text" name="telephone_client"
                class="form-control @error('telephone_client') is-invalid @enderror"
                value="{{ old('telephone_client', $reservation?->telephone_client) }}" id="telephone_client"
                placeholder="Telephone Client">
            {!! $errors->first(
                'telephone_client',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        {{-- pardefaut --}}
        <div class="form-group mb-2 d-none mb20">
            <label for="designation" class="form-label">{{ __('Designation') }}</label>
            <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror"
                value="{{ old('designation', $reservation->designation ?? 'Engager') }}" id="designation"
                placeholder="Designation">
            @error('designation')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>


        {{--  <div class="form-group mb-2 mb20">
            <label for="tarif" class="form-label">{{ __('Tarif') }}</label>
            <input type="text" name="tarif" class="form-control @error('tarif') is-invalid @enderror"
                value="{{ old('tarif', $reservation?->tarif) }}" id="tarif" placeholder="Tarif">
            {!! $errors->first('tarif', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}
        <div class="form-group mb-2 mb20 d-none">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror"
                value="{{ old('user_id', auth()->id()) }}" id="user_id" placeholder="User Id" readonly>
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
