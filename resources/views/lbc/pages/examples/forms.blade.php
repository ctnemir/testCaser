@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleExamples;

  $data['meta']['description'] = 'Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.';
@endphp

@section('page-content')
  <!-- example-start-1 -->
  <div class="container">
    <div class="py-5 text-center">
      <x-headline text="Checkout form"/>

      <p class="lead">
        Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.
      </p>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <x-headline class="d-flex justify-content-between align-items-center mb-3" tag="h4" text="">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </x-headline>

        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Second product</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Third item</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">-$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <form class="card p-2">
          {{--Input group coming soon--}}
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">

            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>

        <form class="needs-validation" novalidate="">
          <div class="row">
            <div class="col-md-6 mb-3">
              <x-input name="name" :label="['text' => 'First name']"/>
            </div>

            <div class="col-md-6 mb-3">
              <x-input name="lastname" :label="['text' => 'Last name']" required/>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Username</label>
            {{--Input groups coming soon--}}
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>

              <input type="text" class="form-control" id="username" placeholder="Username" required="">

              <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <x-input
              name="email"
              :label="['text' => 'Email <span class=\'text-muted\'>(Optional)</span>']"
              type="email"
              placeholder="you@example.com"
            />
          </div>

          <div class="mb-3">
            <x-input
              name="address"
              :label="['text' => 'Address']"
              placeholder="1234 Main St"
            />
          </div>

          <div class="mb-3">
            <x-input
              name="address2"
              :label="['text' => 'Address 2 <span class=\'text-muted\'>(Optional)</span>']"
              placeholder="Apartment or suite"
            />
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <x-select
                class="custom-select d-block w-100"
                name="country"
                :label="[
                  'text' => 'Country'
                ]"
                :options="['Choose...', 'Germany']"
              />
            </div>

            <div class="col-md-4 mb-3">
              <x-select
                  class="custom-select d-block w-100"
                  name="state"
                  :label="[
                  'text' => 'State'
                ]"
                  :options="['Choose...', 'Frankfurt']"
              />
            </div>

            <div class="col-md-3 mb-3">
              <x-input
                name="zip"
                :label="['text' => 'Zip']"
              />
            </div>
          </div>

          <hr class="mb-4">

          <x-checkbox
              name="same-address"
              :group="['class' => 'mb-0']"
              :label="['text' => 'Shipping address is the same as my billing address']"
          />

          <x-checkbox
            name="save-info"
            :group="['class' => 'mb-0']"
            :label="['text' => 'Save this information for next time']"
          />

          <hr class="mb-4">

          <x-headline class="mb-3" tag="h4" text="Payment"/>

          <div class="d-block my-3">
            <x-radio
              name="paymentMethod"
              id="credit"
              :group="['class' => 'mb-0']"
              :label="['text' => 'Credit card']"
            />

            <x-radio
              name="paymentMethod"
              id="debit"
              :group="['class' => 'mb-0']"
              :label="['text' => 'Debit card']"
            />

            <x-radio
              name="paymentMethod"
              id="paypal"
              :group="['class' => 'mb-0']"
              :label="['text' => 'PayPal']"
            />
          </div>

          <div class="row">
            <div class="col-md-6">
              <x-input
                name="cc-name"
                help="Full name as displayed on card"
                :label="['text' => 'Name on card']"
              />
            </div>

            <div class="col-md-6">
              <x-input
                name="cc-number"
                :label="['text' => 'Credit card number']"
              />
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <x-input
                name="cc-expiration"
                :label="['text' => 'Expiration']"
              />
            </div>

            <div class="col-md-3">
              <x-input
                name="cc-cvv"
                :label="['text' => 'CVV']"
              />
            </div>
          </div>

          <hr class="mb-4">

          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">© 2017-2019 Company Name</p>
      @php
        $example = [
          [
            'text' => 'Privacy',
            'href' => '#',
          ],
          [
            'text' => 'Terms',
            'href' => '#',
          ],
          [
            'text' => 'Support',
            'href' => '#',
          ],
        ]
      @endphp

      <ul class="list-inline">
        @foreach($example as $item)
          <li class="list-inline-item">
            <x-link :all="$item"/>
          </li>
        @endforeach
      </ul>
    </footer>
  </div>

  @push('js')
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        'use strict'

        window.addEventListener('load', function () {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation')

          // Loop over them and prevent submission
          Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
              if (form.checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
              }
              form.classList.add('was-validated')
            }, false)
          })
        }, false)
      }())
    </script>
  @endpush
  <!-- example-end-1 -->

  {!! GrepCodeExampleExamples::get(1) !!}
@endsection
