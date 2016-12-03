<form method="get" id="searchform"
      action="<?php get_bloginfo('url'); ?>/podstawowa/">
    <input type="text" placeholder="Wyszukaj" value="<?php echo $search_text; ?>"
           name="s" id="s"
           onblur="if (this.value == '')
               {this.value = '<?php echo $search_text; ?>';}"
           onfocus="if (this.value == '<?php echo $search_text; ?>')
               {this.value = '';}" />
    <input type="hidden" id="searchsubmit" />
</form>