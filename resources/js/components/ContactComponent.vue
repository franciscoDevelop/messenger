<template>
  <b-list-group-item :variant="variant">
    <b-row class="p-2" align-h="center">
      <b-col cols="12" md="3" class="text-center">
        <b-img rounded="circle" blank width="60" height="60" blank-color="#777" alt="img" class="m-1" />
      </b-col>
      <b-col cols="7" align-self="center" class="d-none d-md-block">
        <p class="mb-1" v-text="name"></p>
        <p class="text-muted small mb-1" v-text="lastMessage"></p>
      </b-col>
      <b-col cols="2" class="d-none d-md-block">
        <p class="text-muted small" v-text="lastTime"></p>
      </b-col>
    </b-row>
  </b-list-group-item>
</template>

<script>
    export default {
        props: [
          'variant'
        ],
        data() {
            return {
              name: 'Francisco Rodriguez',
              lastMessage: 'Tú: Hasta luego',
              lastTime: '1:37 pm'
            };
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
