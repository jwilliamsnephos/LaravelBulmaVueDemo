<div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" v-model="selected.name">
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link" v-on:click="showPage('theme')">Next</button>
  </div>
</div>