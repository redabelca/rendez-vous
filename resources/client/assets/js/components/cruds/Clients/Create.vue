<template>
  <section class="content-wrapper" style="min-height: 95vh;">
    <section class="content-header">
      <h1>Client</h1>
    </section>

    <section class="card">
      <div class="col-xs-12 card-body">
        <form @submit.prevent="submitForm" novalidate>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create</h3>
            </div>

            <div class="box-body">
              <back-buttton></back-buttton>
            </div>

            <bootstrap-alert />

            <div class="box-body">
              <div class="form-group">
                <label for="nom">Nom *</label>
                <input
                  type="text"
                  class="form-control"
                  name="nom"
                  placeholder="Enter Nom *"
                  :value="item.nom"
                  @input="updateNom"
                />
              </div>
              <div class="form-group">
                <label for="cin">CIN</label>
                <input
                  type="text"
                  class="form-control"
                  name="cin"
                  placeholder="Enter CIN"
                  :value="item.cin"
                  @input="updateCin"
                />
              </div>
              <div class="form-group">
                <label for="tel">Tel</label>
                <input
                  type="text"
                  class="form-control"
                  name="tel"
                  placeholder="Enter Tel"
                  :value="item.tel"
                  @input="updateTel"
                />
              </div>
            </div>

            <div class="box-footer">
              <vue-button-spinner
                class="btn btn-primary btn-sm"
                :isLoading="loading"
                :disabled="loading"
              >Save</vue-button-spinner>
            </div>
          </div>
        </form>
      </div>
    </section>
  </section>
</template>


<script>
import { mapGetters, mapActions } from "vuex";

export default {
  data() {
    return {
      // Code...
    };
  },
  computed: {
    ...mapGetters("ClientsSingle", ["item", "loading"])
  },
  created() {
    // Code ...
  },
  destroyed() {
    this.resetState();
  },
  methods: {
    ...mapActions("ClientsSingle", [
      "storeData",
      "resetState",
      "setNom",
      "setCin",
      "setTel"
    ]),
    updateNom(e) {
      this.setNom(e.target.value);
    },
    updateCin(e) {
      this.setCin(e.target.value);
    },
    updateTel(e) {
      this.setTel(e.target.value);
    },
    submitForm() {
      this.storeData()
        .then(() => {
          this.$router.push({ name: "clients.index" });
          this.$eventHub.$emit("create-success");
        })
        .catch(error => {
          console.error(error);
        });
    }
  }
};
</script>


<style scoped>
</style>
