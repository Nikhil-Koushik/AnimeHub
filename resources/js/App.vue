<template>
  <h1>Hello App!</h1>
  <p>
    <strong>Current route path:</strong> {{ $route.fullPath }}
  </p>
  <nav>
    <RouterLink to="/ah/home">Go to Home</RouterLink>
    <RouterLink to="/ah/about">Go to About</RouterLink>
  </nav>
  <main>
    <router-view></router-view>
  </main>
</template>

<!-- <template>
  <div>
    <router-view></router-view>
  </div>
</template> -->