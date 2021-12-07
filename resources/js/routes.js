import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import LoadersAndAnimations from './components/LoadersAndAnimations';
import Wallpapers from './components/Wallpapers';

export default {
    mode: 'history',

    routes: [
        {
            path:'/',
            component: Logo
        },
        {
            path:'/logo-symbol',
            component: LogoSymbol,
            name:'logo-symbol'
        },
        {
            path:'/colors',
            component: Colors,
        },
        {
            path:'/typography',
            component: Typography,
            name:'typography'
        },
        {
            path:'/mascot',
            component: Mascot,
        },
        {
            path:'/illustrations',
            component: Illustrations,
        },
        {
            path:'/loaders',
            component: LoadersAndAnimations,
        },
        {
            path:'/wallpapers',
            component: Wallpapers,
        },
    ]
}
