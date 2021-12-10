<template>
  <div>
    <v-select label="nome" :placeholder="'Selecione'" :options="cidades">
    </v-select>
    <input type="hidden" :id="name" :name="name" />
  </div>
</template>

<script>
import state from "./../store.js";
export default {
  data: function () {
    return {
      cidades: [],
    };
  },
  props: {
    name: String,
    componente: String,
  },
  methods: {
    requisicao: function (estadoId) {
      return axios
        .get("/cidades/" + estadoId)
        .then((response) => (this.cidades = response.data));
    },
  },
  computed: {
    estadoId: function () {
      return state.estado;
    },
    obComponent: function () {
      return state.componente;
    },
  },
  watch: {
    estadoId: function () {
      if (this.obComponent === this._props.componente && this.estadoId !== "") {
        return this.requisicao(this.estadoId);
      }
      this.cidades = [];
    },
  },
};
</script>