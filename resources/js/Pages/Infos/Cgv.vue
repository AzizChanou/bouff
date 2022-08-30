<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";
import Icon from "@/Components/Icon.vue";

const currentYear = new Date().getFullYear();
</script>

<template>
    <Head title="Conditions generales de ventes" />
    <UserDashboard>
        <div class="space-y-14 divide-y-2 px-6 py-8">
            <div class="space-y-8">
                <h1 class="text-4xl font-bold text-center">
                    Conditions Générales de
                    <span class="text-bouff-primaryone">Vente</span>
                </h1>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 1 :<span class="text-bouff-primaryone">
                            Règlementation applicable :</span
                        >
                    </h1>
                    <p class="text-justify">
                        Après signature du devis par les deux parties, le marché
                        est conclu aux conditions fixées ci-après. Ces
                        conditions s’appliquent malgré toute clause contraire
                        figurant sur d’autres documents contractuels joints aux
                        marchés, et notamment malgré toute clause contraire du
                        C.C.A.P.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 2 :<span class="text-bouff-primaryone">
                            Durée de validité de l’offre</span
                        >
                    </h1>
                    <p class="text-justify">
                        La présente offre est valable pour une durée maximale
                        d’un mois à compter de sa date de rédaction.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 3 :<span class="text-bouff-primaryone">
                            Actualisation des prix</span
                        >
                    </h1>
                    <p class="text-justify">
                        Les prix du présent devis seront actualisés à compter du
                        mois de démarrage des travaux et durant l’exécution de
                        ces derniers. L’actualisation sera faite en fonction de
                        l’évolution de l’index BT (à compléter par un numéro
                        d’index) entre la date d’établissement du devis et la
                        date de chaque situation afin de tenir compte des
                        variations économiques suivant la formule suivante : P
                        (Prix actualisés) = Po (Prix du marché) * (Im (indice
                        mois d’exécution) / Io (indice date du devis).
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 4 :<span class="text-bouff-primaryone">
                            Conditions suspensives du marché</span
                        >
                    </h1>
                    <p class="text-justify">
                        4.a. Autorisations : Le marché est conclu, le cas
                        échéant, sous la condition suspensive de l’obtention des
                        autorisations administratives ou de voisinage
                        nécessaires à l’exécution du marché. <br />
                        4.b. Recours à un prêt : Lorsque le client recourt à un
                        prêt pour financer tout ou partie des travaux, il en
                        informe l’entreprise et le marché est alors conclu dans
                        les conditions prévues par le Code de la Consommation
                        aux articles L 311-1 et suivants (en cas de recours à un
                        crédit à la consommation) ou L 312-1 et suivants (en cas
                        de recours à un crédit immobilier).
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 5 :<span class="text-bouff-primaryone">
                            Conditions d’exécution des travaux</span
                        >
                    </h1>
                    <p class="text-justify">
                        L’entreprise se réserve le droit de refuser
                        l’utilisation des matériaux ou produits fournis par le
                        client. Lorsque le support révèle des sujétions
                        imprévues, non décelables par l’entreprise, sauf au
                        moment des travaux, l’entreprise pourra proposer au
                        client des travaux supplémentaires qui ne seront
                        réalisés qu’après acceptation de l’avenant au marché.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 6 :<span class="text-bouff-primaryone">
                            Prolongation éventuelle des délais d’exécution</span
                        >
                    </h1>
                    <p class="text-justify">
                        Sauf délai différent stipulé aux conditions
                        particulières, les travaux seront exécutés dans un délai
                        maximum d’un an après la signature du devis. Lorsqu’un
                        délai ou une date d’exécution a été prévu aux conditions
                        particulières, celui-ci n’est valable que si la
                        signature matérialisant l’accord du client sur le devis
                        intervient dans les 15 jours suivant l’établissement du
                        devis. Lorsque l’accord du client a été officialisé
                        au-delà de ce délai de 15 jours, l’entreprise peut être
                        contrainte de modifier le délai ou la date d’exécution
                        prévu, en fonction des engagements qu’elle aura pu
                        prendre par ailleurs entre-temps. Dans tous les cas, le
                        délai d’exécution sera prolongé de la durée des journées
                        d’intempérie, des périodes de grève ou de congés payés,
                        et en cas de force majeure. De même, dans tous les cas,
                        les interruptions de travaux provoquées par le client ou
                        son représentant, par d’autres corps d’état ou par
                        l’administration prolongent autant que de besoin le
                        délai d’exécution. En cas de pénurie, si le matériau
                        proposé dans le devis n’est plus disponible et qu’un
                        matériau équivalent est disponible l’entreprise pourra
                        alors proposer au client un avenant au devis afin que la
                        prestation puisse avoir lieu. Dans ce cas, le client
                        sera libre de valider cet avenant. Si ce dernier refuse
                        la modification du devis il s’engage à attendre le
                        retour en stock du produit initialement prévu mais ne
                        pourra exercer aucun recours contre l’entreprise ni se
                        prévaloir d’un quelconque préjudice en raison du retard
                        dû à la pénurie.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 7 :<span class="text-bouff-primaryone">
                            Réception de travaux</span
                        >
                    </h1>
                    <p class="text-justify">
                        La réception des travaux, par laquelle le client déclare
                        accepter l’ouvrage avec ou sans réserves, se fait en
                        présence de l’entrepreneur et du client. Elle donne lieu
                        à un procès-verbal signé des deux parties à raison d’un
                        exemplaire pour l’entreprise et d’un exemplaire pour le
                        client. En l’absence d’acte de réception signé par les
                        deux parties, il est expressément convenu que tout
                        paiement des travaux à hauteur d’au moins 95 %
                        manifestera la volonté non équivoque du maître d’ouvrage
                        de réceptionner sans réserve ; la date de réception sera
                        alors celle du règlement qui permet d’atteindre ce seuil
                        de 95 %.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 8 :<span class="text-bouff-primaryone">
                            Acompte</span
                        >
                    </h1>
                    <p class="text-justify">
                        La signature du devis devra être accompagnée du
                        versement d’un acompte représentant 30 % du montant du
                        devis ; en tout état de cause, les travaux ne
                        commenceront pas avant le versement de cet acompte.
                        L’acompte perçu sera déduit au moment de l’établissement
                        de la facture définitive.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 9 :<span class="text-bouff-primaryone">
                            Situations intermédiaires</span
                        >
                    </h1>
                    <p class="text-justify">
                        Lorsque la durée des travaux sera supérieure à un mois,
                        l’entreprise établira une situation des travaux réalisés
                        le 30 de chaque mois. Ces situations devront être payées
                        sous 8 jours à compter de leur date d’établissement.
                        Tout retard de paiement autorisera l’entreprise, même
                        sans mise en demeure préalable et sans préavis, à
                        suspendre immédiatement la réalisation des travaux
                        jusqu’au paiement complet de ses situations
                        intermédiaires
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 10 :<span class="text-bouff-primaryone">
                            Délai de paiement</span
                        >
                    </h1>
                    <p class="text-justify">
                        Les factures de l’entreprise sont payables comptant,
                        sans retenue de garantie et sans escompte. Tout retard
                        de paiement entrainera l’application, sans mise en
                        demeure préalable, d’intérêts de retard au taux légal
                        majoré de 7 points, calculés à compter de la date de
                        facturation. Si le client est un professionnel, une
                        indemnité forfaitaire pour frais de recouvrement de 40 €
                        sera due en cas de retard de paiement, en sus des
                        pénalités de retard convenues dans les présentes
                        conditions générales. Toujours si le client est un
                        professionnel, l’indemnité pour frais de recouvrement
                        pourra être majorée si les frais réellement engagés ont
                        excédé la somme de 40 €, sur justification des frais
                        exposés.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 11 :<span class="text-bouff-primaryone">
                            Utilisation du devis</span
                        >
                    </h1>
                    <p class="text-justify">
                        Les devis et les documents annexés sont et restent, en
                        toutes circonstances, la propriété de l’entreprise. Ils
                        ne peuvent être utilisés ou communiqués à une tierce
                        personne qu’avec l’autorisation écrite du chef
                        d’entreprise et doivent lui être restitués sans délai
                        s’il n’est pas donné suite à la proposition de
                        l’entreprise.
                    </p>
                </div>
            </div>
            <div class="flex flex-col space-y-1 text-sm pt-4">
                <ul class="flex flex-row mx-auto space-x-6">
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="facebook" />
                        </li>
                    </a>
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="instagram" />
                        </li>
                    </a>
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="twitter" />
                        </li>
                    </a>
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="linkedin" />
                        </li>
                    </a>
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="tiktok" />
                        </li>
                    </a>
                </ul>
                <span class="text-center">
                    &copy; {{ currentYear }} Bouff . Tous droits reservés.
                </span>
            </div>
        </div>
    </UserDashboard>
</template>
