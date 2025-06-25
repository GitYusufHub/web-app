
<?php $settings = get_settings(); ?>
<script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "<?php echo $settings->company_name;?>",
        "url": "<?php echo base_url();?>",
        "image":"<?php echo base_url("upload/$settings->logo");?>",
        "logo": "<?php echo base_url("upload/$settings->logo");?>",
        "telephone": "<?php echo $settings->phone_1; ?>",
        "email": "<?php echo $settings->email; ?>",
        
        "address": {
        "@type": "PostalAddress",
        "addressLocality": "İstanbul",
        "addressRegion": "TR",
        "postalCode": "34020",
        "streetAddress": "<?php echo strip_tags($settings->company_name); ?> <?php echo strip_tags($settings->address); ?>"
        },
        "sameAs": [ 
        "<?php echo $settings->facebook;?>",
        "<?php echo $settings->twitter;?>",
        "<?php echo $settings->instagram;?>",
        "<?php echo $settings->pinterest;?>",
        "<?php echo $settings->vimeo;?>",
        "<?php echo $settings->linkedin;?>"
        ]
        }
        "availableChannel": {
        "@type": "ServiceChannel",
        "name": "<?php echo $settings->company_name; ?>",
        "availableLanguage": {
          "@type": "Language",
          "name": "Turkish",
          "alternateName": "tr"
        },
    </script>