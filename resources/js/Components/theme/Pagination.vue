<template>
  <div>
    <nav>
      <ul class="pagination pagination-sm">
        <template v-if="pagination.links.length > 3" v-for="(link, key) in pagination.links">
          <li v-if="link.url == null" class="page-item" :key="key">
            <a v-html="link.label" class="page-link-dark"></a>
          </li>
          <li class="page-item" :key="'link-'+key" v-else>
            <Link
            :href="link.url"
            v-html="link.label"
            class="page-link-dark"
            :class="link.active ? 'active' : '' "
            ></Link>
          </li>
        </template>

      </ul>
    </nav>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    Link,
  },
  props: {
    pagination: Object,
  },
};
</script>

<style>
</style>
