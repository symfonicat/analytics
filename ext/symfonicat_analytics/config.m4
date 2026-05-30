PHP_ARG_ENABLE(symfonicat_analytics, whether to enable native support, [ --enable-symfonicat-analytics Enable native remove string])

if test "$PHP_SYMFONICAT_ANALYTICS" != "no"; then
	AC_DEFINE(HAVE_SYMFONICAT_ANALYTICS, 1, [Have native remove string support])
	PHP_NEW_EXTENSION(symfonicat_analytics, symfonicat_analytics.c, $ext_shared)
fi
