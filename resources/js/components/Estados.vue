<template>
  <div>
    <v-select label="nome" v-model="selected" @input="mudou" :options="estados">
    </v-select>
    <input type="hidden" v-model="selected.id" :name="name" />
  </div>
</template>

<script>
import state from "./../store.js";
import vSelect from "vue-select";
export default {
  props: {
    name: String,
    componente: String,
  },
  data: function () {
    return {
      selected: "",
      estados: [],
    };
  },
  computed: {
    estadoId: function () {
      return state.estado;
    },
    obComponent: function () {
      return state.componente;
    },
  },
  methods: {
    mudou: function () {
      if (this.selected == null) {
        this.selected = {
          nome: "",
          id: "",
        };
        vSelect.props.placeholder.default = "123";
      }
      console.log(this);
      state.estado = this.selected.id;
      state.componente = this._props.componente;
    },
  },
  created: function () {
    axios.get("/estados").then((response) => (this.estados = response.data));
  },
};
</script>