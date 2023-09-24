<template>
  <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
    <template #field>
      <treeselect
          :id="field.attribute"
          :placeholder="field.name"
          v-model="value"
          :multiple="field.multiple"
          :options="options"
          :value-consists-of="field.valueConsistsOf"
          :flat="field.flatMode"
          :show-count="showCount"
          search-nested
      />
    </template>
  </DefaultField>
</template>

<script>
import Treeselect from 'vue3-treeselect'
import 'vue3-treeselect/dist/vue3-treeselect.css'

import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || '';
      this.options = this.field.options;
      this.showCount = this.field.showCount || false;
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || '')
    },
  },

  components: { Treeselect },

  data() {
    return {
      // define the default value
      value: this.field.value,
      // define options
      options: this.options,
      showCount: this.field.showCount
    }
  },
}
</script>
