//const Dashboard = require("../components/kasirPage.vue");

import Dashboard from "../components/kasirPage.vue";
import CustomerPage from "../components/customerPage.vue";
import PaketPage from "../components/paketPage.vue";
import TransactionPage from "../components/transactionPage.vue";

export const kasirRoutes = [
    {
        name: "dashboard",
        path: "/kasir/dashboard",
        component: Dashboard,
    },
    {
        name: "customerPage",
        path: "/kasir/customer-page",
        component: CustomerPage,
    },
    {
        name: "paketPage",
        path: "/kasir/paket-page",
        component: PaketPage,
    },
    {
        name: "transactionPage",
        path: "/kasir/transaction-page",
        component: TransactionPage,
    },
];
