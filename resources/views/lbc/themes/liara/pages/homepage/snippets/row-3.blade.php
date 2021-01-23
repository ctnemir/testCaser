<div class="bg-lighter font-size-lg">
  <div class="container pt-3 py-lg-4">
    <h2>Felis est est luctus</h2>

    <p class="mb-3">
      Miscere quo leo sequi fusce cum alliciebat oleantem.
      Odit Omnis ad elit eu fuga in unde sed sensim odit Servata id o exilium,
      mazim sed potentia numero.
    </p>

    <div class="row row-3">
      <div class="col-lg-6">
        <x-card :all="[
          'class' => 'mb-3 mb-lg-0',
          'body' => [
            'headline' => [
              'link' => [
                'text' => 'Muneris Intestinum',
                'href' => '/themes/liara/how-we-rethink-our-approach-to-theme-design',
              ],
            ],
          ],
          'image' => [
            'src' => 'liara/images/homepage/apple-woman.jpg',
            'width' => [540],
          ],
        ]">
          <x-slot name="body">
            <p>
              Ea non'e etiam quarta qui monoculus, hic dis quo. Ad iniuratum eu
              liuius in eros error,
              quae auctor nec succursu. Ullo Porta ac facit securitas dicit,
              pressa, notitiam rem
              arcu in nec lius in ordinum si quae odit Fervore nec lius nec.
            </p>

            @include('lbc.themes.liara.components.social-share', ['class' => 'mb-0'])
          </x-slot>
        </x-card>
      </div>

      <div class="col-lg-6">
        <x-card :all="[
          'class' => 'mb-4 mb-lg-0',
          'body' => [
            'headline' => [
              'link' => [
                'text' => 'Genere massa',
                'href' => '/themes/liara/how-we-rethink-our-approach-to-theme-design',
              ],
            ],
          ],
          'image' => [
            'src' => 'liara/images/homepage/wood.jpg',
            'width' => [540],
          ],
        ]">
          <x-slot name="body">
            <p>
              Eorum lacus minus sit ipsa, contrahentes immortales ille.
              Duorum quaeque mattis iure porta. Renovo earum.
              Cum capita scomata consensit si partus dis dispositae sensim,
              pessimum veritatem nec.
            </p>

            @include('lbc.themes.liara.components.social-share', ['class' => 'mb-0'])
          </x-slot>
        </x-card>
      </div>
    </div>
  </div>
</div>
