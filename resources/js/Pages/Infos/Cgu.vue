<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";
import Icon from "@/Components/Icon.vue";

const currentYear = new Date().getFullYear();
</script>

<template>
    <Head title="Conditions generales d'utilisations" />
    <UserDashboard>
        <div class="space-y-14 divide-y-2 px-6 py-8">
            <div class="space-y-8">
                <h1 class="text-4xl font-bold text-center">
                    Conditions Générales d’<span class="text-bouff-primaryone"
                        >Utilisation</span
                    >
                </h1>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 1 :<span class="text-bouff-primaryone">
                            Objets</span
                        >
                    </h1>
                    <p class="text-justify">
                        Les présentes CGU ou Conditions Générales d’Utilisation
                        encadrent juridiquement l’utilisation des services du
                        site BOUFF. Constituant le contrat entre la société
                        BOUFF, l’Utilisateur, l’accès au site doit être précédé
                        de l’acceptation de ces CGU. L’accès à cette plateforme
                        signifie l’acceptation des présentes CGU.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 2 :<span class="text-bouff-primaryone">
                            Mentions légales</span
                        >
                    </h1>
                    <p class="text-justify">
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. A vero molestiae quae. Aspernatur maxime commodi
                        et tenetur quidem. Quidem labore tempora repellendus
                        amet adipisci beatae quod facilis ad ducimus nam.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 3 :<span class="text-bouff-primaryone">
                            Accès au site</span
                        >
                    </h1>
                    <p class="text-justify">
                        Le site BOUFF permet d’accéder gratuitement aux services
                        suivants : <br />
                        Vente de nourritures repas, boisson… ;<br />
                        Achat de nourritures repas, boisson… ;<br />
                        Livraison de nourritures.<br />
                        Le site est accessible gratuitement depuis n’importe où
                        par tout utilisateur disposant d’un accès à Internet.
                        Tous les frais nécessaires pour l’accès aux services
                        (matériel informatique, connexion Internet…) sont à la
                        charge de l’utilisateur. L’accès aux services dédiés aux
                        membres s’effectue à l’aide d’un identifiant et d’un mot
                        de passe. Pour des raisons de maintenance ou autres,
                        l’accès au site peut être interrompu ou suspendu par
                        l’éditeur sans préavis ni justification.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 4 :<span class="text-bouff-primaryone">
                            Collecte des données</span
                        >
                    </h1>
                    <p class="text-justify">
                        Pour la création du compte de l’Utilisateur, la collecte
                        des informations au moment de l’inscription sur le site
                        est nécessaire et obligatoire. Conformément à la loi
                        n°78-17 du 6 janvier relative à l’informatique, aux
                        fichiers et aux libertés, la collecte et le traitement
                        d’informations personnelles s’effectuent dans le respect
                        de la vie privée. Suivant la loi Informatique et
                        Libertés en date du 6 janvier 1978, articles 39 et 40,
                        l’Utilisateur dispose du droit d’accéder, de rectifier,
                        de supprimer et d’opposer ses données personnelles.
                        L’exercice de ce droit s’effectue par :
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 5 :<span class="text-bouff-primaryone">
                            Propriété intellectuelle</span
                        >
                    </h1>
                    <p class="text-justify">
                        Les marques, logos ainsi que les contenus du site BOUFF
                        (illustrations graphiques, textes…) sont protégés par le
                        Code de la propriété intellectuelle et par le droit
                        d’auteur. La reproduction et la copie des contenus par
                        l’Utilisateur requièrent une autorisation préalable du
                        site. Dans ce cas, toute utilisation à des usages
                        commerciaux ou à des fins publicitaires est proscrite.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 6 :<span class="text-bouff-primaryone">
                            Responsabilité</span
                        >
                    </h1>
                    <p class="text-justify">
                        Bien que les informations publiées sur le site soient
                        réputées fiables, le site se réserve la faculté d’une
                        non-garantie de la fiabilité des sources. Les
                        informations diffusées sur le site BOUFF sont présentées
                        à titre purement informatif et sont sans valeur
                        contractuelle. En dépit des mises à jour régulières, la
                        responsabilité du site ne peut être engagée en cas de
                        modification des dispositions administratives et
                        juridiques apparaissant après la publication. Il en est
                        de même pour l’utilisation et l’interprétation des
                        informations communiquées sur la plateforme. Le site
                        décline toute responsabilité concernant les éventuels
                        virus pouvant infecter le matériel informatique de
                        l’Utilisateur après l’utilisation ou l’accès à ce site.
                        Le site ne peut être tenu pour responsable en cas de
                        force majeure ou du fait imprévisible et insurmontable
                        d’un tiers. La garantie totale de la sécurité et la
                        confidentialité des données n’est pas assurée par le
                        site. Cependant, le site s’engage à mettre en œuvre
                        toutes les méthodes requises pour le faire au mieux.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 7 :<span class="text-bouff-primaryone">
                            Liens hypertexte</span
                        >
                    </h1>
                    <p class="text-justify">
                        Le site peut être constitué de liens hypertextes. En
                        cliquant sur ces derniers, l’Utilisateur sortira de la
                        plateforme. Cette dernière n’a pas de contrôle et ne
                        peut pas être tenue responsable du contenu des pages web
                        relatives à ces liens.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 8 :<span class="text-bouff-primaryone">
                            Cookies</span
                        >
                    </h1>
                    <p class="text-justify">
                        Lors des visites sur le site, l’installation automatique
                        d’un cookie sur le logiciel de navigation de
                        l’Utilisateur peut survenir. Les cookies correspondent à
                        de petits fichiers déposés temporairement sur le disque
                        dur de l’ordinateur de l’Utilisateur. Ces cookies sont
                        nécessaires pour assurer l’accessibilité et la
                        navigation sur le site. Ces fichiers ne comportent pas
                        d’informations personnelles et ne peuvent pas être
                        utilisés pour l’identification d’une personne.
                        L’information présente dans les cookies est utilisée
                        pour améliorer les performances de navigation sur le
                        site lapetiteperle.fr. En naviguant sur le site,
                        l’Utilisateur accepte les cookies. Leur désactivation
                        peut s’effectuer via les paramètres du logiciel de
                        navigation.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 9 :<span class="text-bouff-primaryone">
                            Publication par l’Utilisateur</span
                        >
                    </h1>
                    <p class="text-justify">
                        Le site BOUFF permet aux membres(Restaurant) de publier
                        des images, des descriptions. Dans ses publications, le
                        membre est tenu de respecter les règles de la Netiquette
                        ainsi que les règles de droit en vigueur. Le site
                        dispose du droit d’exercer une modération à priori sur
                        les publications et peut refuser leur mise en ligne sans
                        avoir à fournir de justification. Le membre garde
                        l’intégralité de ses droits de propriété intellectuelle.
                        Toutefois, toute publication sur le site implique la
                        délégation du droit non exclusif et gratuit à la société
                        éditrice de représenter, reproduire, modifier, adapter,
                        distribuer et diffuser la publication n’importe où et
                        sur n’importe quel support pour la durée de la propriété
                        intellectuelle. Cela peut se faire directement ou par
                        l’intermédiaire d’un tiers autorisé. Cela concerne
                        notamment le droit d’utilisation de la publication sur
                        le web et sur les réseaux de téléphonie mobile. À chaque
                        utilisation, l’éditeur s’engage à mentionner le nom du
                        membre à proximité de la publication. L’Utilisateur est
                        tenu responsable de tout contenu qu’il met en ligne.
                        L’Utilisateur s’engage à ne pas publier de contenus
                        susceptibles de porter atteinte aux intérêts de tierces
                        personnes. Toutes procédures engagées en justice par un
                        tiers lésé à l’encontre du site devront être prises en
                        charge par l’Utilisateur. La suppression ou la
                        modification par le site du contenu de l’Utilisateur
                        peut s’effectuer à tout moment, pour n’importe quelle
                        raison et sans préavis.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 10 :<span class="text-bouff-primaryone">
                            Durée du contrat</span
                        >
                    </h1>
                    <p class="text-justify">
                        Le présent contrat est valable pour une durée
                        indéterminée. Le début de l’utilisation des services du
                        site marque l’application du contrat à l’égard de
                        l’Utilisateur.
                    </p>
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Article 11 :<span class="text-bouff-primaryone">
                            Droit applicable et juridiction compétente</span
                        >
                    </h1>
                    <p class="text-justify">
                        Le présent contrat est soumis à la législation
                        béninoise. L’absence de résolution à l’amiable des cas
                        de litige entre les parties implique le recours aux
                        tribunaux béninois compétents pour régler le
                        contentieux.
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
