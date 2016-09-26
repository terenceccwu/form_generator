<div class="form-group">
  <label class="control-label">{{name}}</label>
  <div class="">
    {{#options}}
    <label class="{{type}}-inline"><input type="{{type}}" name="{{name}}" value="{{value}}" <?php echo set_{{type}}("{{name}}", {{value}}, ${{name}} == {{value}});?>/>{{label}}</label>
    {{/options}}
  </div>
</div>
