{{--
  Unified appointment / WhatsApp lead form.
  Variables: $context (salon|clinic|lhr|general), optional $sectionId, $formId, $variant (dark|pale|ink), $extras (optional HTML)
--}}
@php
  $sectionId = $sectionId ?? 'booking';
  $formId = $formId ?? 'apptForm';
  $context = $context ?? 'general';
  $variant = $variant ?? 'dark';
  $extras = $extras ?? null;
  if ($variant === 'pale') {
      $variantClass = 'skin-appt-section--pale';
  } elseif ($variant === 'ink') {
      $variantClass = 'skin-appt-section--ink';
  } else {
      $variantClass = '';
  }
@endphp

<section id="{{ $sectionId }}" class="skin-appt-section {{ $variantClass }}">
  <div class="skin-appt-inner">
    <div class="skin-appt-card">
      <div class="skin-appt-deco" aria-hidden="true">
        <div class="skin-appt-ring skin-appt-ring--outer">
          <div class="skin-appt-ring skin-appt-ring--mid">
            <div class="skin-appt-ring skin-appt-ring--inner">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M3 3V21L9 15L11 20L13 19L11 14L18 14L3 3Z" fill="#d4b5a0" stroke="#1a1a1a" stroke-width="0.4" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="skin-appt-head">
        <h2 class="skin-appt-title">Begin Your</h2>
        <h2 class="skin-appt-title-acc"><em>Transformation</em></h2>
        <p class="skin-appt-desc">Our expert team will confirm your appointment and guide you to the best treatment for
          your unique needs.</p>
      </div>
      <form id="{{ $formId }}" class="skin-appt-form" data-context="{{ $context }}">
        <p class="skin-appt-label">Request Appointment</p>
        <div class="skin-appt-grid">
          <div class="skin-appt-field">
            <label for="{{ $formId }}_name">Full Name</label>
            <input id="{{ $formId }}_name" name="name" type="text" autocomplete="name" placeholder="Your Name" required>
          </div>
          <div class="skin-appt-field">
            <label for="{{ $formId }}_phone">Phone</label>
            <input id="{{ $formId }}_phone" name="phone" type="tel" autocomplete="tel" placeholder="+91 00000 00000" required>
          </div>
        </div>
        <button type="submit" class="skin-appt-submit">Book Appointment <span aria-hidden="true">→</span></button>
      </form>
      @if (!empty($extras))
        <div class="skin-appt-extras">
          {!! $extras !!}
        </div>
      @endif
    </div>
  </div>
</section>
